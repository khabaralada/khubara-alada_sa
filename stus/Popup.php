<html>
<head>
<script>
$('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);
</script></head>


<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        Context here</p>
      </div>
    </div>
  </div>
</div>