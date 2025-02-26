<!doctype html>
<html>
  <head>
    <!-- Page title -->
    <title>PHP: Week 2</title>
  </head>
  <body>
  
    <!-- PHP echo to create an h1 tag with text -->
    <?='<h1>PHP and Creating Output</h1>'; ?>
  
    <!-- PHP echo to create a paragraph with text -->
    <?='<p>The PHP echo command can be used to create output.</p>';?> 

    <!-- PHP echo to explain solutions to using quotes within echo -->
    <?='<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';?>
    
    <ul>
        <!-- List of solutions for handling quotes in PHP -->
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <!-- Additional HTML content -->
    <h2>More HTML to Convert</h2>

    <!-- Example of displaying text with quotes -->
    <p>PHP says "Hello World!"</p>

    <!-- Display sentence with both single and double quotes -->
    <p>Can you display a sentence with ' and "?</p>

    <!-- PHP echo to add an image with dynamic source and alt text -->
    <img src="<?='https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png';?>" alt="<?='ALT TAG'; ?>" >

    <?php
        // Array containing personal information
        $person = array(
            'first' => 'Dilkhush',
            'last'  => 'Yadav',
            'email' => 'dilkhushyadav@gmail.com',
            'web'   => 'https://dilkhushyadav.com'
        );

        // Opening div tag
        echo "<div>";

        // Display personal information using echo
        echo "<h3>Hello ".$person['first'] .' '.$person['last'] . "</h3>";
        echo "<p>Email: <a href=mailto:'".$person['email']."'>". $person['email'] ."</a></p>";
        echo "<p>Website: <a href='".$person['web']."' target=_blank>". $person['web'] ."</a></p>";

        // Closing div tag
        echo "</div>";
    ?>

  </body>
</html>
