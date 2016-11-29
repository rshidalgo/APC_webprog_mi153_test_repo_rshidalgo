<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $news_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Nickname</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Cellphone</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Home Address</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Email</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Gender</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Website</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         <tr>
            <td><label for="text">Comment</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
         
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
