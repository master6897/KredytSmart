<?php
/* Smarty version 3.1.39, created on 2021-03-15 18:02:20
  from 'E:\xampp\htdocs\KredytSmarty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f931cafdd40_42893406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5429a3726c3059977b7fe4754484b680b905799c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\KredytSmarty\\app\\calc.tpl',
      1 => 1615827736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f931cafdd40_42893406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1482995207604f931caf6125_30622643', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1482995207604f931caf6125_30622643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1482995207604f931caf6125_30622643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać kwotę kredytu:</label>
                <input type="text" name="credits" value=<?php echo $_smarty_tpl->tpl_vars['credits']->value;?>
></input>
                <label>Prosze podać na ile lat:</label>
                <input type="text" name="years" value=<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
></input>
                <label>Proszę podać oprocentowanie kredytu (z '.' w przypadku oprocentowania po przecinku, np. (8.5)):</label>
                <input type="text" name="percent" value=<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
></input>
                <input type="submit" value="Oblicz!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'mess');
$_smarty_tpl->tpl_vars['mess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->do_else = false;
?>
        <h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h3>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
    <h3>Twoja miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
</h3>
    <h3>Całkowity koszt kredytu wynosi: <?php echo $_smarty_tpl->tpl_vars['cost']->value;?>
</h3>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
