<script>
    window.deleteButtonTrans = '<?php echo e(trans("quickadmin.qa_delete_selected")); ?>';
    window.copyButtonTrans = '<?php echo e(trans("quickadmin.qa_copy")); ?>';
    window.csvButtonTrans = '<?php echo e(trans("quickadmin.qa_csv")); ?>';
    window.excelButtonTrans = '<?php echo e(trans("quickadmin.qa_excel")); ?>';
    window.pdfButtonTrans = '<?php echo e(trans("quickadmin.qa_pdf")); ?>';
    window.printButtonTrans = '<?php echo e(trans("quickadmin.qa_print")); ?>';
    window.colvisButtonTrans = '<?php echo e(trans("quickadmin.qa_colvis")); ?>';
</script>
    <script src="<?php echo e(url('js')); ?>/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
  </script>
  <script src="<?php echo e(url('js')); ?>/jquery.dataTables.min.js"></script>
  <script src="<?php echo e(url('js')); ?>/jquery.nicescroll.js"></script>
  <script src="<?php echo e(url('js')); ?>/scripts.js"></script>
   <script src="<?php echo e(url('js')); ?>/bootstrap.js"> </script>

<?php /* /home/devtools/PHP/tmpsite/resources/views/partials/js.blade.php */ ?>