<?php
/* Smarty version 5.1.0, created on 2024-05-12 22:50:34
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664147bae8b2f0_88263623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad949c96ba32df87aac065cfee08a521150fd1a' => 
    array (
      0 => 'register.tpl',
      1 => 1715553264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664147bae8b2f0_88263623 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\interview';
?><!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <?php if ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
        <p><?php echo $_smarty_tpl->getValue('error');?>
</p>
    <?php }?>
    <?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
        <p><?php echo $_smarty_tpl->getValue('success');?>
</p>
    <?php } else { ?>
        <form method="post" action="register.php">
            <label>Username:</label><br>
            <input type="text" name="username" value="<?php if ((null !== ($_smarty_tpl->getValue('user') ?? null))) {
echo $_smarty_tpl->getValue('user')->getUsername();
}?>"><br>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?php if ((null !== ($_smarty_tpl->getValue('user') ?? null))) {
echo $_smarty_tpl->getValue('user')->getEmail();
}?>"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Register">
        </form>
    <?php }?>
</body>
</html>
<?php }
}
