
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>Art Gallery <?php echo $title_for_layout;?></title>
        <?php echo $this->Html->css('styles')?>
	
</head>
<body>
    
    
    
    <div id="HeaderWrapper">
        <div id="Header" class="widthWrapper">
            <h1>Art Gallery</h1>
               </div>
        
    </div>
            
            <div id="navigation">         
            <ul id="nav">
                <i class="icon-home"></i>
                <li><a href="/" style="color: black;">Home</a></li>
                <li><a href="" style="color: black;">Gallery</a></li>  
            </ul>
                <ul id="nav-right">
                    <i class="icon-home"></i>
                 <li><a href="/users/add" style="color: black;">Register</a></li>
                <li><a href="/items" style="color: black;">Items</a></li>
                <li><a href="/categories" style="color: black;">Categories</a></li>  
                <li><a href="#" style="color: black;">Information</a></li>
                <?php if (AuthComponent::user()) : ?>
                    <li><a href="/users/logout" style="color: black;">Log Out</a></li>
                 <?php else : ?>
                    <li><a href="/users/login" style="color: black;">Log In</a></li>
                 <?php endif; ?>
            </div>
            
     
    
   <!-- <div id ="Search" class="widthWrapper">
       <div class="searchInput">
            <input type="text" value="" name=""/> 
            
        </div>
        <div>
            <button>Search</button>
        </div> -->
        
    </div>
    
    
    
    <div id="MainBody">
        <div id="Content" class="widthWrapper"
             
               
             <?php echo $this->fetch('content') ?>
    </div>
             
    
	
	
	
</body>
</html>

