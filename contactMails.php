
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact mails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="contactMailStyle.css">
</head>

<body>
  <section class="full-section">
    <h1>Contact Mails</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Mail</th>
            <th>Email</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <?php
            include 'showContact.php';    
            while($rows = $result->fetch_assoc()) {               
          ?>
          <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['subject'];?></td>
            <td><?php echo $rows['details'];?></td>
            <td><?php echo $rows['email'];?></td>
          </tr>
          <?php
                }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>


</html>