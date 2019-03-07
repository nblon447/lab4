<?php

require_once("Template.php");

$page = new Template("Form Page");
$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();
print"<form action='resultpage.php' method='POST'>
                    <div>
                        <div>
                            <input placeholder='Email' type='text' id='email'
                                name='email' autofocus>
                        </div>
                        <div>
                            <input placeholder='Phone Number' type='text' id='phone' name='phone'>
                        </div>
                        <div>
                            <input placeholder='URL' type='text' id='url' name='url'>
                        </div>
                    </div>
                    <div>
                        // <button type='reset'>Reset</button>
                        <button type='submit'>Submit</button>
                    </div>
                </form>";
print $page->getBottomSection();

?>

