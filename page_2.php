<div>
  <h2>
    The participants are:
  </h2>
  <div class="form-group">
    <form method="GET" action="">
      <div class="form-group">
        <?php
          foreach ($namesArray as $name) {
        ?>
          <button
            type="btn"
            class="btn btn-outline-primary"
          >
            <?php echo $name; ?>
          </button>
          <?php } ?>
      </div>
      <input
        type="hidden"
        name="names"
        value="<?php echo implode(',', $namesArray); ?>"
      >
      <div class="form-group">
        <input
          type="submit"
          name="do_math"
          class="btn btn-primary"
          value="know the chosen one"
        >
      </div>
    </form>
  </div>
</div>