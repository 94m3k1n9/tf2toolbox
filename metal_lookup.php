<?php session_start() ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>TF2Toolbox: Backpack Tools for Team Fortress 2</title>
	<link href="stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="stylesheets/metal_style.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="media/favicon.ico" />
	<link rel="icon" type="image/png" href="media/engie_toolbox_32.png" />
</head>
<body>
  <div id="header">
    
  <?php
  require('header.php');
  ?>
  
    <div id="header_toolbar">
      <table id="header_toolbar_table">
        <tr>
          <td><a href="index.php">Home</a></td>
          <td><a href="bbcode_lookup.php">BBCode Translator</a></td>
          <td id="active_tool_cell"><a href="metal_lookup.php">Metal Maker</a></td>
        </tr>
      </table>
    </div>
  </div>
  
  <div id="content">
    <form id="lookup_field_form" action="metal_result.php" method="post">
      <div id="tool_title">
        <img id="tool_img" src="media/metal_tool_80.png" alt="metal_tool">
        <div id="tool_text">
          <span id="tool_name">Metal Maker</span><br/>
          <span id="tool_desc">Organizes backpack weapons into scrap metal and token combinations</span>         
        </div>

      </div>
      <div id="checkboxes">

        <div class="checkbox_column checkbox_column_extra_wide">
          <span class="checkbox_title">Options:</span>
          <input type="radio" name="weapon_use" value="smart" checked>Keep one of each weapon on selected pages<br />
          <input type="radio" name="weapon_use" value="all">Use all weapons on selected pages<br />
          <br />
        </div>
        
        <div class="checkbox_column">
          <span class="checkbox_title">Pages to Search:</span>
          <input type="checkbox" name="pages[]" value="all" checked>All Backpack Pages<br />
          <input type="checkbox" name="pages[]" value="1">1<br />
          <input type="checkbox" name="pages[]" value="2">2<br />
          <input type="checkbox" name="pages[]" value="3">3<br />

        </div>
        
        <div class="checkbox_column">
          <span class="checkbox_title"></span>
          <input type="checkbox" name="pages[]" value="4">4<br />
          <input type="checkbox" name="pages[]" value="5">5<br />
          <input type="checkbox" name="pages[]" value="6">6<br />
        </div>
        
      </div>
      
      <?php
      if(!empty($_SESSION['steamID'])) {
        echo '<input type="submit" id="lookup_submit" value="Not yet done :(" disabled/>'; 
      }
      else {
        echo '<input type="submit" style="color:#bbbbbb" id="lookup_submit" value="Please lookup an user first." disabled/>';
      }
      
      ?>
    </form>
  </div>
  
  <?php
  require('footer.php');
  ?>
<?php require("google_analytics.php") ?>
</body>
</html>