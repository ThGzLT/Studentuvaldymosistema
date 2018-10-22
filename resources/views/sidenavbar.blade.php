<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 360px;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 150px;
    left: 0px;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}


.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 15px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="create_grade">Create Grade</a>
  <a href="gradelist">Gradelist</a>
  <a href="create">Create Student</a>
  <a href="studentlist">Student List</a>
  <a href="edit">Edit/Delete Student</a>
  <a href="create_lectures">Create Lectures</a>
  <a href="edit_lecture">Edit Lectures</a>
  <a href="lecturelist">Lectures list</a>
</div>
