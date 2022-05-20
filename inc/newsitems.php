<!-- Three column layout -->
<?php
$sql = "SELECT * FROM news;";
$result = mysqli_query($con, $sql);
$i = 0;
foreach ($result as $r)
{
  echo '<div class="col-xl-4 d-xl-block d-lg-none d-md-none col-sm-12">';
  echo '<div class="inner">';
  echo '<div class="img-container">';
  echo '<a href="#" class="tag tag-j-1">News</a>';
  echo '<img src="'.$r['image'].'" class="img-fluid responsive" alt="Responsive image">';
  echo '</div>';
  echo '<div class="job_block">';
  echo   $r['title'];
  echo '<p class="details"> ' . $r['description'] . ' </p>';
  echo '<button type="button" class="btn btn-primary btn-lg btn_1"> Read More </button>';
  echo '<div class="user">';
  echo '<img src="'.$r['profile image'].'" class="profile_image" alt="Company logo">';
  echo '<div class="user_info">';
  echo '<span class="person"><strong> Posted By '. $r['person'] .' </strong></span>';
  echo '<span class="date"> ' . $r['date'] . ' </span>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  if (++$i == 3)break;
}
?>

<!-- Two column layout -->
<?php
$sql = "SELECT * FROM news;";
$result = mysqli_query($con, $sql);
$i = 0;
foreach ($result as $r)
{
  echo '<div class="d-none d-md-block col-md-6 d-xl-none">';
  echo '<div class="inner">';
  echo '<div class="img-container">';
  echo '<a href="#" class="tag tag-j-1">News</a>';
  echo '<img src="'.$r['image'].'" class="img-fluid responsive" alt="Responsive image">';
  echo '</div>';
  echo '<div class="job_block">';
  echo   $r['title'];
  echo '<p class="details"> ' . $r['description'] . ' </p>';
  echo '<button type="button" class="btn btn-primary btn-lg btn_1"> Read More </button>';
  echo '<div class="user">';
  echo '<img src="'.$r['profile image'].'" class="profile_image" alt="Company logo">';
  echo '<div class="user_info">';
  echo '<span class="person"><strong> Posted By '. $r['person'] .' </strong></span>';
  echo '<span class="date"> ' . $r['date'] . ' </span>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  if (++$i == 2)break;
}
?>
