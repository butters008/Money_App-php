<?php 
  include_once "includes/dbh.inc.php";
  include "helper/header.php";
?>

<?php 
//Going to move this into functions later
$sql = "SELECT * FROM animals";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

//Testing the query
if (!$result){
  echo "SQL Statement FAILED";
  die("Query FAILED" . mysqli_error());
}
?>
<section id="mainContent">
<div id="herdListPage">
  <div id="listTitle">
    <h2>Herd List</h2>
  </div>
  <div id="listTable">
    <table id="herdList">
      <thead>
        <tr>
          <th id="headStart"></th>
          <th>Steel Tag</th>
          <th>Ear Tag</th>
          <th>Sex</th>
          <th id="End">Status</th>
        </tr>
      </thead>
      <tbody style="color: white;">
<?php
  if ($resultCheck > 0){
    while ($animal = mysqli_fetch_assoc($result)){ 
      echo "<tr>";
      echo "<td><a href='animal.php?id=".$animal["id"]."'><button>Edit</button></a></td>";
      echo "<td>".$animal['animal_id1']."</td>";
      echo "<td>".$animal['animal_id2']."</td>";
      echo "<td>".$animal['sex']."</td>";
      echo "<td>".$animal['status']."</td>";
      echo "</tr>";
    }
  }
?>
      </tbody>
    </table>
  </div>
</div>
</section>
<div id="sideContent">

</div>
<jsp:include page="../includes/footer.jsp"/>


<?php 
  include "helper/footer.php";
?>