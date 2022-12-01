<?php 
include "helper/header.php"; 


?>
<section id="mainContent" style="text-align: center;">
  <form id="addAnimalPage" name="herdForm" action="/herd/herdSubmit" enctype="multipart/form-data" method="post">
  <div class="aTitle">
    <h1>Animal Information</h1>
    <!-- Taking out value(s) -->
    <!-- <input type="text" name="id" id="id" style="pointer-events: none;" hidden> -->
  </div>
  <div class="aType">
    <table class="herdTableForm">
      <tbody>
        <tr>
          <h3>Basic Information</h3>
        </tr>
        <tr>
          <td>Sex</td>
          <td>Raised - Calf ID (opt)</td>
        </tr>
        <tr>
          <td>
            <select name="animalType" class="herdDropDownInput" id="aTypeDropDown">
              <!-- Need to redo the if for empty or not empty values and put in value returned with selected attribute-->
              <option value="cow">Cow</option>
              <option value="bull">Bull</option>
            </select>
          </td>
          <td>
            <input type="text" id="BornAndRaised" placeholder="NOT FUNCTIONAL YET" disabled>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="aPic">
    <table class="herdTableForm">
      <tr><h3>Purchase Information</h3></tr>
      <tr>
        <td><label for="boughtFrom">Bought From</label></td>
        <td><label for="boughtDate">Date Bought</label></td>
      </tr>
      <tr>
        <td><input type="text" name="boughtFrom" id="boughtFrom" ></td>
        <td><input type="date" name="boughtDate" id="boughtDate" ></td>
      </tr>
    </table>
    <br>
  </div>
  <div class="aID">
    <table class="herdTableForm">
      <tbody>
        <tr>
          <h3>Required Information</h3>
        </tr>
        <tr>
          <td><label for="animalId1">ID #1</label></td>
          <td><label for="animalId2">ID #2 (opt)</label></td>
        </tr>
        <tr>
          <td>
            <!-- Taking for right now  onfocusout="" -->
            <input type="text" name="animalId1" id="animalId1">
          </td>
          <td>
            <input type="text" name="animalId2" id="animalId2">
          </td>
        </tr>
        <tr class="errorJSChecking">
        <!-- This row will be used for error checking -->
          <td>
            <div id="errorAId1" style="color: red;">
            <!-- Gonna have to redo all the error handling -->
            </div>
          </td>
        </tr>
        <tr>
          <td><label for="breed">Animal Breed</label></td>
          <td><label for="animalStatus">Animal Status</label></td>
        </tr>
        <tr>
          <td>
            <input type="text" name="breed" id="breed">
          </td>
          <td>
            <div>
              <select name="herdStatus" class="herdDropDownInput" id="animalStatus">
                <option value="Active">Active</option>
                <option value="Sold">Sold</option>
                <option value="Butchered">Butchered</option>
                <option value="Dead">Dead</option>
              </select>
            </div>
          </td>
        </tr>
        <tr class="errorJSChecking">
          <!-- This row will be used for error checking -->
          <td>
            <div id="errorBreed" style="color: red;"></div>
          </td>
              
        </tr>
      </tbody>
    </table>
  </div>

      <!-- This is going to be used for holding the PICTURE of the cow -->
      <div class="aStatus">
          <!-- <%--            <c:if test="${empty herd.id}">--%>
          <%--                <div style="text-align: center;">--%>
          <%--                    <label>Upload Picture: </label><br><br>--%>
          <%--                    <input type="file" name="animalImage"><br>--%>
          <%--                </div>--%>
          <%--            </c:if>--%>
          <%--            <c:if test="${not empty herd.id}">--%>
          <%--                <img src="d:/pics/${herd.animalImage}}">--%>
          <%--                <input type="file" name="animalImage"><br>--%>
          <%--            </c:if>--%> -->
      </div>

  <div class="aDates">
    <table class="herdTableForm">
      <tbody>
      <tr><h3>Dates of Animals</h3></tr>
      <tr>
        <td><label for="dateOfBirth">Date of Birth</label></td>
        <td><label for="dateOfDeath">Date of Death</label></td>
      </tr>
      <tr>
        <td><input type="date" name="dateOfBirth" id="dateOfBirth" value="${herd.dateOfBirth}"></td>
        <td><input type="date" name="dateOfDeath" id="dateOfDeath" value="${herd.dateOfDeath}"></td>
      </tr>
      </tbody>
    </table>
  </div>

  <div class="aSubmit">
    <!-- You need to  -->
      <!-- <c:if test="${not empty herd.id}"> -->
          <!-- <a href="./delete/${herd.id}" id="deleteBtn">
              <button type="button">Delete</button>
          </a>
          <button type="submit" id="button" onclick="lastCheck()">Save</button> -->
      <!-- </c:if> -->

    <button type="submit" id="button" onclick="lastCheck()">Submit</button>
  </div>


  </form>
  <!-- <script src="../pub/js/CowForm.js"></script> -->
</section>
<div id="sideContent">
    <div class="CalfListOnHerd">
        <h3>Calf List</h3>
        <table style="background-color: rgba(129,129,129,0.47); border-radius: 15px;">
            <thead>
            <tr>
                <th></th>
                <th>Calf ID (#1)</th>
                <th>Sex</th>
                <th>Birth Date</th>
            </tr>
            </thead>
            <tbody>
            <!-- <c:forEach items="${calves}" var="calfList">
                <tr>
                    <td><a href="./calfUpdate?calfId=${calfList.calf.id}">
                        <button>Edit</button>
                    </a></td>
                    <td>${calfList.calf.calfId1}</td>
                    <td>${calfList.calf.calfSex}</td>
                    <td>${calfList.calf.dateOfBirth}</td>
                </tr>
            </c:forEach> -->
            </tbody>
        </table>
    </div>
</div>

<?php include "helper/footer.php"; ?>
