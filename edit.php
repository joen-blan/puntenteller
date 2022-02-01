<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<?php
if (isset($_POST["plusL1"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L1'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL1"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L1'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL2A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L2A'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL2A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L2A'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL2B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L2B'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL2B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L2B'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL3"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L3'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL3"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L3'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL4A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L4A'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL4A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L4A'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL4B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L4B'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["minL4B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L4B'";
        $result = $conn->query($sql);header("Refresh:0");
}
if (isset($_POST["plusL5A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L5A'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
if (isset($_POST["minL5A"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L5A'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
if (isset($_POST["plusL5B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L5B'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
if (isset($_POST["minL5B"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L5B'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
if (isset($_POST["plusL6"])) {
     $sql = "UPDATE puntenlijst SET punten = punten + 1 WHERE klas = 'L6'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
if (isset($_POST["minL6"])) {
     $sql = "UPDATE puntenlijst SET punten = punten - 1 WHERE klas = 'L6'";
        $result = $conn->query($sql);
        header("Refresh:0");
}
?>


  


<div class="columns is-mobile is-centered tags are-large">
   
   
    <div class="column has-text-centered">
        <span class="tag">L1</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL1" value="+1"/>
                <input type="submit" name="minL1" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L2A</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL2A" value="+1"/>
                <input type="submit" name="minL2A" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L2A'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>

    <div class="column has-text-centered">
        <span class="tag">L2B</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL2B" value="+1"/>
                <input type="submit" name="minL2B" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L2B'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L3</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL3" value="+1"/>
                <input type="submit" name="minL3" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L3'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L4A</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL4A" value="+1"/>
                <input type="submit" name="minL4A" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L4A'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L4B</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL4B" value="+1"/>
                <input type="submit" name="minL4B" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L4B'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L5A</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL5A" value="+1"/>
                <input type="submit" name="minL5A" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L5A'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L5B</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL5B" value="+1"/>
                <input type="submit" name="minL5B" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L5B'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
    <div class="column has-text-centered">
        <span class="tag">L6</span>
        <div class="columns is-mobile is-centered tags are-large">
            <div class="column has-text-centered">
                <form method="post">
                <input type="submit" name="plusL6" value="+1"/>
                <input type="submit" name="minL6" value="-1"/>
                </form>
            </div>
        </div>
        <span class="tag">
        <?php
            $sql = "SELECT punten FROM puntenlijst WHERE klas='L6'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
             echo $row["punten"]." Punten";}
                
            }
            ?>
        </span>
    </div>
    
</div>

<div class="section">
    <div class="field">
          <label class="label">Opdracht van de maand aanpassen:</label>
  
    <form class="control" method="post">
        
                <input class="input is-primary is-large" type="text" name="opdracht" placeholder="Typ hier de opdracht"/>
                
                <input class="button is-link" type="submit" name="sbtOpdracht" value="Klik hier om de opdracht aan te passen"/>
    </form>
    <?php
if (isset($_POST["sbtOpdracht"])) {
    $opdrachtstring = $_POST["opdracht"];
     $sql = "UPDATE tblOpdracht SET opdracht = '$opdrachtstring' WHERE ID = 1";
        $result = $conn->query($sql);
        echo " <div class'content'>Opdracht aangepast!</div> ";
}
?>
    </div>
</div>	

	


<?php include("includes/footer.php");?>

</body>
</html>