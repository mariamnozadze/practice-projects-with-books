<?php
class HelloWorld
{
    //default language is english
    function sayHello($language = 'English')
    {
        echo "<p>";

        //print specific message to a languge
        switch ($language) {
            case 'Dutch':
                echo "Hallo wereld";
                break;
            case "German":
                echo "hallo welt";
                break;
            case "Korean":
                echo "Anneyong";
                break;
            case 'Spanish':
                echo '¡Hola, mundo!';
                break;
            default:
                echo "hello world";
                break;
        }
        // Close the HTML paragraph:
        echo '</p>';
    } // End of sayHello() method.
}// End of HelloWorld class.
