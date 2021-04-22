<?php

class FormUtils
{
    public static function input(string $type, string $label, string $for, string $name)
    {
        ?>
        <label for="<?php echo $for; ?>"> <?php echo  $label; ?></label>
        <input class=ecar type="<?php echo  $type; ?>" name="<?php echo $name; ?>" id="<?php echo $for ; ?>">
<?php }
}
