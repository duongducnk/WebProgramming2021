<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Document page 1</title>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background-color: white;
        display: flex;
        flex-direction: column;
        margin: 0;
        font-size: 20px;
      }
      .header {
        background-color: red;
        color: white;
      }
      .main {
        display: flex;
        flex-direction: row;
        width: 100%;
      }
      .main-content {
        width: 80%;
        min-height: 900px;
      }
      .sidebar {
        background-color: yellow;
        width: 20%;
      }
      .footer {
        background-color: blue;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="header">Header content page 1</div>
    <div class="main">
      <div class="main-content">
        <h1>Main content page 1</h1>
        <p>Main content page 1Main content page 1</p>
      </div>
      <div class="sidebar">Sidebar content page 1 Sidebar content page 1</div>
    </div>
    <div class="footer">Footer content page 1</div>
  </body>
</html>