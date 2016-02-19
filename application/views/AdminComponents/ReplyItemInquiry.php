<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Reply to Item Inquiries
      <small>Send E Mails to Item Inquiries</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
<br/>
<div class="panel panel-default">
  <div class="panel-body">
  <form action="<?php echo "/Welcome/sendItemInqEmail/".$content[0]->id; ?>" method="post" >

  <div class="row">
    <div class="col-xs-6" >
      <div class="input-group"  >
      <span class="input-group-addon" >E-Mail</span> <input
      type="text" class="form-control"
      id="emailAddress" name="emailAddress" value = "<?php echo $content[0]->Email; ?>"
       />
      </div>

    </div>
  </div>
  <br/>

  <div class="row">
          <div class="col-xs-5">
            <div class="input-group">
              <span class="input-group-addon">Message</span>
              <textarea class="form-control" rows="3" disabled><?php echo $content[0]->Comment; ?></textarea>

          </div>
          </div>

          </div>
          <br/>



  <div class="row">
    <div class="col-xs-6" >
      <div class="input-group"  >
      <span class="input-group-addon" >Subject</span> <input
      type="text" class="form-control"
      id="subject" name="subject"
       />
      </div>

    </div>
  </div>
  <br/>
  <div class="row">
    <div class="col-md-8">
      <div class="input-group">
      <textarea class="form-control" id="message" name="message" required="required"
      rows="10" cols="110"></textarea>
      </div>
    </div>
  </div>
  <br/>
  <button type="submit" name="submit" class="btn btn-primary">Send</button>
    
  </div>
  <br/>

<!-- START STYLISH E MAIL -->

<!-- END -->

  </form>
  </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->