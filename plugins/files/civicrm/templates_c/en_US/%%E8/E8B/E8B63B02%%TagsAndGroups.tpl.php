<?php /* Smarty version 2.6.27, created on 2015-11-29 11:29:43
         compiled from CRM/Contact/Form/Edit/TagsAndGroups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/TagsAndGroups.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<style>
  #tagtree .highlighted > span {
    background-color: #fefca6;
  }
  #tagtree .helpicon ins {
    display: none;
  }
  #tagtree ins.jstree-icon {
    cursor: pointer;
  }
</style>
<script type="text/javascript">
  (function($, _){'; ?>

    var entityID='<?php echo $this->_tpl_vars['entityID']; ?>
',
      entityTable='<?php echo $this->_tpl_vars['entityTable']; ?>
',
      $form = $('form.<?php echo $this->_tpl_vars['form']['formClass']; ?>
');
    <?php echo '

    $(function() {
      function highlightSelected() {
        $("ul input:not(:checked)", \'#tagtree\').each(function () {
          $(this).closest("li").removeClass(\'highlighted\');
        });
        $("ul input:checked", \'#tagtree\').each(function () {
          $(this).parents("li[id^=tag]").addClass(\'highlighted\');
        });
      }
      highlightSelected();

      $("#tagtree input").change(function(){
        highlightSelected();
      });

      var childTag = "'; ?>
<?php echo $this->_tpl_vars['loadjsTree']; ?>
<?php echo '";
      if (childTag) {
        //load js tree.
        $("#tagtree").jstree({
          plugins : ["themes", "html_data"],
          themes: {
            "theme": \'classic\',
            "dots": false,
            "icons": false,
            "url": CRM.config.resourceBase + \'packages/jquery/plugins/jstree/themes/classic/style.css\'
          }
        });
      }
	  '; ?>

      <?php if (! empty ( $this->_tpl_vars['permission'] ) && $this->_tpl_vars['permission'] != 'edit'): ?>
        <?php echo '
          $("#tagtree input").prop(\'disabled\', true);
        '; ?>

      <?php endif; ?>
      <?php echo '
    });
  })(CRM.$, CRM._);
  '; ?>

</script>

<?php if ($this->_tpl_vars['title']): ?>
<div class="crm-accordion-wrapper crm-tagGroup-accordion collapsed">
  <div class="crm-accordion-header"><?php echo $this->_tpl_vars['title']; ?>
</div>
  <div class="crm-accordion-body" id="tagGroup">
<?php endif; ?>
    <table class="form-layout-compressed<?php if ($this->_tpl_vars['context'] == 'profile'): ?> crm-profile-tagsandgroups<?php endif; ?>">
      <tr>
        <?php if (! $this->_tpl_vars['type'] || $this->_tpl_vars['type'] == 'group'): ?>
          <td>
            <?php if ($this->_tpl_vars['groupElementType'] == 'select'): ?>
              <span class="label"><?php if ($this->_tpl_vars['title']): ?><?php echo $this->_tpl_vars['form']['group']['label']; ?>
<?php endif; ?></span>
            <?php endif; ?>
            <?php echo $this->_tpl_vars['form']['group']['html']; ?>

          </td>
        <?php endif; ?>
        <?php if (! $this->_tpl_vars['type'] || $this->_tpl_vars['type'] == 'tag'): ?>
          <td width="70%"><?php if ($this->_tpl_vars['title']): ?><span class="label"><?php echo $this->_tpl_vars['form']['tag']['label']; ?>
</span><?php endif; ?>
            <div id="tagtree">
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Tagtree.tpl", 'smarty_include_vars' => array('level' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
          </td>
          <tr><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/Tagset.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
        <?php endif; ?>
      </tr>
    </table>
<?php if ($this->_tpl_vars['title']): ?>
  </div>
</div><!-- /.crm-accordion-wrapper -->
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>