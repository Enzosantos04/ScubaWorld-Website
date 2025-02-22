<?php
function navigation()
{

    echo ' 
     <header>
        <nav>
            <img src="./images/file (12).png" alt="" id="logo-header">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./pages/history.php">Our History</a></li>
                <li><a href="./pages/gallery.php">Gallery</a></li>
                <li><a href="./pages/contact.php">Contact us</a></li>
            </ul>
        </nav>
        <div class="night-mode">
            <button id="button-mode">Dark Mode</button>
        </div>
    </header>
    ';
}
function navigationTwo()
{

    echo ' 
     <header>
        <nav>
            <img src="../images/file (12).png" alt="" id="logo-header">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/history.php">Our History</a></li>
                <li><a href="../pages/gallery.php">Gallery</a></li>
                <li><a href="../pages/contact.php">Contact us</a></li>
            </ul>
        </nav>
        <div class="night-mode">
            <button id="button-mode">Dark Mode</button>
        </div>
    </header>
    ';
}
