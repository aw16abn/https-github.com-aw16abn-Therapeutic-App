<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

require 'webroot' . DIRECTORY_SEPARATOR . 'index.php';

$title = "HomeTest"; 
        $content = ' <p> 
        This website has been created for a family run online modern art gallery.
        There are three models they need:
        
        </p>;
        
        <img src="Images/web portal.jpg" class="imgLeft" />
        <h1>1. Web portal</h1>
        <p>
            -official website of family-run modern art gallery
            - site to run business 
            -market products and services
                -public access to on-line showroom
                -look for available items
                -display details of items
                -contact sales team for appointment
                    -EXTRA VALUE - customers to register their details and interested  
                    -save searches
            -Staff login to access secure areas such as IMS and CMS.
        </p>
        
        <img src="Images/IMS.jpg" class="imgLeft" />
        <h1>2. Information management system (IMS)</h1>
        <p>
            -Database driven
            -Manage details of business
                -paintings and scuptures for sale
            -only available to members of staff.
         
        
        </p>
        
        <img src="Images/CMS.png" class="imgLeft" />
        <h1>3. Content Management System (CMS)</h1>
        <p>
            - only available to authorised members of staff.
            -support easy management of back end online gallery
            -e.g. photos, location, typeology, price etc. 
            -publish and advertise on the pages of the online show-room 
            any relevant news like latest entries and special offers etc. 
        </p>
        

        ';

        include 'Template.php';
