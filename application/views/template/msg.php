<?php if($this->session->flashdata('success_msg')){ ?>
  <div class="mensaje" id="mensaje">
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
  </div>

<?php } ?>
<?php if($this->session->flashdata('error_msg')){ ?>
  <div class="mensaje" id="mensaje">
    <div id="mensaje" class="alert alert-danger">
    <?php echo $this->session->flashdata('error_msg'); ?>
  </div>
</div>
<?php } ?>
