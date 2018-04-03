<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?> </title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            
            <div id="banner">
                <h1 style="color: white;">Modern Art Gallery</h1>
            </div>
            
            <div id ="navigation">
                <ul id="nav">
                    <li><a href="index.php" style="color: white;">Home</a></li>
                     <li><a href="app/view/pages/Gallery.ctp" style="color: white;">Gallery</a></li>
                      <li><a href="app/view/pages/posts.ctp" style="color: white;">Upload</a></li>
                      <li><a href="#" style="color: white;">Login</a></li>
                      <li><a href="#" style="color: white;">Content</a></li>
                      <li><a href="#" style="color: white;">Information</a></li>
                </ul>
                
            </div>
            
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                <?php echo $sidebarContent; ?>
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
            
        </div>
        
       
    </body>
</html>
