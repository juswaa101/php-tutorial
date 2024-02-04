<?php
    /*
        19. PHP Advanced
            Topics to be covered:
            1. PHP Error Handling
            2. PHP Exception Handling
            3. PHP Filter
            4. PHP JSON
            5. PHP OOP
            6. PHP AJAX
            7. PHP MySQL
            8. PHP XML
            9. PHP SimpleXML
            10. PHP SOAP
            11. PHP Web Services
            12. PHP REST
            13. PHP Sockets
            14. PHP Headers
    */

    // 1. PHP Error Handling
    // - The error functions are used to deal with error handling and logging.
    // - The error functions allow us to define our own way of handling errors.
    
    // Example:
    // - Create a custom error handler function.
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Webmaster has been notified";
        error_log("Error: [$errno] $errstr", 1, );
    }
    set_error_handler("customError", E_USER_WARNING);

    // - Trigger error
    $test = 2;
    if ($test > 1) {
        trigger_error("Value must be 1 or below", E_USER_WARNING);
    }

    // 2. PHP Exception Handling
    // - The exception functions are used to deal with exception handling.
    // - The exception functions allow us to define our own way of handling exceptions.

    // Example:
    // - Create a custom exception class
    class customException extends Exception {
        public function errorMessage() {
            // error message
            $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile() . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
            return $errorMsg;
        }
    }

    // - Create a function to check email
    function checkEmail($email) {
        // check if e-mail is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new customException($email);
        }
    }

    // - Test the custom exception
    try {
        checkEmail("test@mail.com");
        // If the email is valid, send an email
    } catch (customException $e) {
        // display custom message
        echo $e->errorMessage();
    }

    // 3. PHP Filter
    // - The filter functions are used to filter data.
    // - The filter functions are used to validate and sanitize data.

    // Example:
    // - Validate an integer
    $int = 123;
    if (!filter_var($int, FILTER_VALIDATE_INT)) {
        echo("Integer is not valid");
    } else {
        echo("Integer is valid");
    }

    // - Sanitize and validate an email address
    $email = "test@mail.com";
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }

    // 4. PHP JSON
    // - The JSON functions are used to encode and decode JSON.

    // Example:
    // - Encode JSON
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj));
    echo "<br>";

    // - Decode JSON
    $arr = array('Peter'=>35, 'Ben'=>37, 'Joe'=>43);
    echo json_encode($arr);

    // 5. PHP OOP
    // - PHP is an object-oriented language.
    // - OOP stands for Object-Oriented Programming.

    // Example:
    // - Create a class
    class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    }

    // - Create an object
    $apple = new Fruit();
    $apple->set_name('Apple');
    echo $apple->get_name();

    // 6. PHP AJAX
    // - AJAX is a technique for creating fast and dynamic web pages.
    // - AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes.

    // Example:
    // - Create an XMLHttpRequest object
    var xhttp = new XMLHttpRequest();
    
    // - Send a request to a server
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();

    // - Receive data from a server
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };

    // 7. PHP MySQL
    // - MySQL is a database system used on the web.
    // - MySQL is a database system that runs on a server.

    // Example:
    // - Create a connection to MySQL
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 8. PHP XML
    // - XML stands for eXtensible Markup Language.
    // - XML is a markup language much like HTML.
    // - XML was designed to store and transport data.

    // Example:
    // - Create an XML document
    $xml = new DOMDocument("1.0", "UTF-8");
    $xml->load("note.xml");

    // - Create an XSL document
    $xsl = new DOMDocument("1.0", "UTF-8");
    $xsl->load("note.xsl");

    // - Create an XSLT processor
    $proc = new XSLTProcessor();

    // - Load the XSL document
    $proc->importStylesheet($xsl);

    // - Transform the XML document
    echo $proc->transformToXML($xml);

    // 9. PHP SimpleXML
    // - SimpleXML is a PHP extension that allows us to easily manipulate and get XML data.

    // Example:
    // - Load and read an XML file
    $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
    echo $xml->to . "<br>";
    echo $xml->from . "<br>";

    // 10. PHP SOAP
    // - SOAP is a protocol for accessing web services.
    // - SOAP stands for Simple Object Access Protocol.
    // - SOAP is a W3C recommendation for communication between two applications.

    // Example:
    // - Create a SOAP client
    $client = new SoapClient("http://www.example.com/webservice.wsdl");

    // - Call a SOAP method
    $result = $client->SomeFunction();

    // 11. PHP Web Services
    // - Web services are used to make the application available to others on the internet.
    // - Web services use XML to code and decode data, and SOAP to transport it.

    // Example:
    // - Create a web service
    $server = new SoapServer("example.wsdl");
    $server->addFunction("hello");
    $server->handle();

    // 12. PHP REST
    // - REST is an architectural style for building distributed systems based on hypermedia.
    // - REST is independent of any underlying protocol and is not necessarily tied to HTTP.

    // Example:
    // - Create a RESTful web service
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "GET request";
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "POST request";
    }

    // 13. PHP Sockets
    // - Sockets are used to communicate between two different processes on the same or different machines.
    // - PHP supports the creation of low-level sockets.

    // Example:
    // - Create a socket
    $fp = fsockopen("www.example.com", 80, $errno, $errstr, 30);

    if (!$fp) {
        echo "$errstr ($errno)<br>";
    } else {
        $out = "GET / HTTP/1.1\r\n";
        $out .= "Host: www.example.com\r\n";
        $out .= "Connection: Close\r\n\r\n";

        fwrite($fp, $out);
        while (!feof($fp)) {
            echo fgets($fp, 128);
        }
        fclose($fp);
    }

    // 14. PHP Headers
    // - Headers are used to send extra information to the browser about the page.
    // - Headers must be sent before any actual output is sent, either by normal HTML tags, blank lines in a file, or from PHP.
    
    // Example:
    // - Send a raw HTTP header
    header("Location: http://www.example.com/");
    exit;
?>



    
