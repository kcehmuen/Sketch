<ul style="float:left;clear:left;width:70%">
<li>
<a class="accord-title button"><span class="icons downarrow"></span>Post Content</a>
<div class="accord-body">
    <div class="accord-container">
    	<label>Can Public Comment</label>
        <select name="public_post" class="bgClass:'select_bg'">
        	<option value="no"  <?php if(sketch("public_post") != "yes"){ ?>selected="selected"<?php } ?>>No</option>
            <option value="yes" <?php if(sketch("public_post") == "yes"){ ?>selected="selected"<?php } ?>>Yes</option>
        </select>
        <label>Main heading</label>
        <input type="text" name="page_heading" value="<?php echo sketch( "page_heading" ); ?>">
		<label>Post content</label>
    	<textarea name="edit" class="doTiny:true tinySettings:1" id="edit" style="height:300px;width:97%"><?php echo sketch( "edit" ); ?></textarea>
</div>
</div>
</li>
</ul>