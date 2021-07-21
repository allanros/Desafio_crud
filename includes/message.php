<?php
session_start();
if(isset($_SESSION['message'])): ?>

<script>
  window.alert('<?php echo $_SESSION['message']; ?>')
</script>

<?php
endif;
session_unset();
?>