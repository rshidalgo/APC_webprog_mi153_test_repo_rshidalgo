<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="text">Nickname</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">Cellphone</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">Home Address</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">Email</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">Gender</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">Website</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
        <tr>
            <td><label for="text">comment</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        
        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>
