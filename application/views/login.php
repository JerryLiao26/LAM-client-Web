<div class="container">
  <div class="welcome_container">
    <div class="form-group">
      <label for="address">Database Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address">
    </div>
    <div class="form-group">
      <label for="username">Database Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Database Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="remember">
      <label class="form-check-label" for="remember">Remember me on this device</label>
    </div>
    <button type="button" onclick="login('<?php echo site_url('message/index') ?>')" class="btn btn-primary btn-lg">Connect Database</button>
  </div>
</div>
<!-- Hiiden variable -->
<script type="text/javascript">
  let validate_url = '<?php echo site_url('login/validate') ?>'
</script>
