<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>


<style type="text/css">
.dropdown-menu{
  background-color: lightblue;

}
 .head{
            text-align: center;
            background-color:#006699;
            color: white;
            
        }
}
ul ul ul {
    left: 100%;
    top: 0;
}
li:hover > ul {
    display: block;
}


ul ul {
    position: relative;
    display: none;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}

</style>




<div class="head">
        <h1>Workflow Based File Tracking System</h1>
        <h4>with Letter Tracking & Public Grievance Monitoring</h4>
        <h3>Government of West Bengal</h3>
<nav class="navbar navbar-expand-lg navbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="department.php">Department</a></li>
            <li><a class="dropdown-item" href="sub-Office.php">Sub-Office</a></li>
            <li><a class="dropdown-item" href="designation.php">Designation</a></li>
            <li><a class="dropdown-item" href="official.php">Official</a></li>
            <li><a class="dropdown-item" href="uno.php">U.O. No. Permission</a></li>
            <li><a class="dropdown-item" href="initialization.php">U.O. No. Initialization</a></li>
            <li><a class="dropdown-item" href="set.php">Set Additional Charges</a></li>
            <li><a class="dropdown-item" href="letters.php">Letter Type</a></li>
            <li><a class="dropdown-item" href="#">Complaint Type</a></li>
            <li><a class="dropdown-item" href="#">Complainant Category</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            File Movement
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="create.php">Create File</a></li>
            <li><a class="dropdown-item" href="receive.php">Receive File (Sent thru’ WFTS)</a></li>
            <li><a class="dropdown-item" href="notreceive.php">Receive File (Not Sent thru’ WFTS)</a></li>
            <li><a class="dropdown-item" href="updaterec.php">Update File Recv. Info</a></li>
            <li><a class="dropdown-item" href="generate.php">Generate Receipt</a></li>
            <li><a class="dropdown-item" href="unodetails.php">U.O.No Generation</a></li>
            <li><a class="dropdown-item" href="attach.php">Attach Document</a></li>
            <li><a class="dropdown-item" href="despatch.php">Despatch File</a></li>
            <li><a class="dropdown-item" href="updatedespatch.php">Update File Despatch Info</a></li>
            <li><a class="dropdown-item" href="intra.php">Intra Office Movement</a></li>
            <li><a class="dropdown-item" href="file.php">Files Not Recd. Within Due Date</a></li>
            <li><a class="dropdown-item" href="link.php">Attach Link / Part File</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Letter Movement
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="recl.php">Receive Letter (Sent thru’ WFTS)</a></li>
            <li><a class="dropdown-item" href="nrecel.php">Receive Letter (Not Sent thru’ WFTS)</a></li>
            <li><a class="dropdown-item" href="uprecl.php">Update Recv. Info</a></li>
            <li><a class="dropdown-item" href="generl.php">Generate Receipt</a></li>
            <li><a class="dropdown-item" href="attacl.php">Attach Document</a></li>
            <li><a class="dropdown-item" href="despl.php">Despatch Letter</a></li>
            <li><a class="dropdown-item" href="udespl.php">Update Despatch Info</a></li>
            <li><a class="dropdown-item" href="createl.php">Create File</a></li>
            <li><a class="dropdown-item" href="mergel.php">Merge with File</a></li>
            <li><a class="dropdown-item" href="filel.php">Letters Not Recd. Within Due Date</a></li>
          
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Public Grievance</a>
        </li>
       
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            M.I.S</a>
    <ul class="dropdown-menu">
    <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">File Tracking System <span class="caret"></span></a>
        <ul class="dropdown-menu">
              <li><a href="track.php">Track File</a></li>
              <li><a href="search.php">Search by File No./Subject</a></li>
              <li><a href="searchuno.php">Search by UO No./UO Dt</a></li>
              <li><a href="wise.php">Department wise Files</a></li>
              <li><a href="summ.php">Summary Report</a></li>
              <li><a href="disposal.php">File Disposal Report</a></li>
            </ul>
          </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Letter Movement <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="trackl.php">Track Letter</a></li>
          <li><a href="searchl.php">Search by Letter No./Subject</a></li>
          <li><a href="wise.php">Department wise Letters</a></li>
          <li><a href="summ.php">Summary Report</a></li>
        </ul>
      </li>
          <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Public Grievance<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="trackl.php">Track Complaint</a></li>
        </ul>
      </li>
       <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">WFTS Usage Report<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="wftsf.php">File Tracking</a></li>
          <li><a href="#">Letter Tracking</a></li>
        </ul>
      </li>
        <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Pending File <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pends.php">Summary Report</a></li>
          <li><a href="pendd.php">Detail Report</a></li>
        </ul>
      </li>
        <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Pending Letter<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pletters.php">Summary Report</a></li>
          <li><a href="#">Detail Report</a></li>
        </ul>
      </li>
    </ul>
        <li class="nav-item">
          <a class="nav-link" href="">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">House Keeping</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="float: right;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>