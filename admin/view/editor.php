<?php
$general->logged_out_protect();
include 'header.php';
?>

<body>

<!-- Post Popups -->
<div id='submit_choice' class='popup'>
  <p>Select Post Type:</p>
  <select>
      <option value='message'>Message from Mary</option>
      <option value='calendar'>Calendar</option>
      <option value='event'>Events</option>
      <input type="button" id="submit_button" value="Submit">
      <input type="button" id="submit_button" value="Cancel">
  </select>
</div>

<div id='submit_complete' class='popup'>
  <p>Post submitted!</p>
</div>

<div id='edit_popup' class='popup'>
  <p>Edit post?</p>
  <input type="submit" value="Yes">
  <input type="submit" value="No">
</div>

<div id='del_popup' class='popup'>
  <p>Delete post?</p>
  <input type="submit" value="Yes">
  <input type="submit" value="No">
</div>
<!-- End Popups -->

<div id='main'>
  <form action="index.php" method="post" id="submit_post">
    <input type="text" id='blog_title' name="blog_title"
          placeholder="Title (optional)"
          value="<?php
                  if (strlen($saves[1]) > 0)
                  {
                    echo $saves[1];
                  }
                  ?>">
    <input type="button" name="action" id="submit" value="submit post">
    <input type="button" name="save" id="save" value="save post">
    <input type="button" name="new_post" id="new_post" value="new post">
    <textarea  id="blog_text" name="blog_text"><?php echo $saves[2]; ?></textarea>
  </form>

  <div id='sidebar'>
  <h4>Recent Posts</h4>
    <ul id="recentPosts">
    <!-- Recent Posts lists populated by listRecent() in save.js -->
    </ul>
  </div>
</div>



<script type="text/javascript">
// Assign recent posts array to variable for listRecent()
recent_list = <?php echo json_encode($recent); ?>
</script>
<script type="text/javascript" src="//tinymce.cachefly.net/4.0/tinymce.min.js">
</script>
<script type="text/javascript" src="scripts/tinymce.config.js"></script>
<script type="text/javascript" src="scripts/editor.js"></script>



<?php include 'footer.php'; ?>