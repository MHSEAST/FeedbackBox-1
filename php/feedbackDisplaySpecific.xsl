<?xml version="1.0" encoding="UTF-8" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" doctype-public="XSLT-compat" omit-xml-declaration="yes" encoding="UTF-8" indent="yes" />

    <xsl:template match="/">
      
      <html lang="en">
        <head>
          <title>Specific Feedback Display</title>
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1" />
          <link rel="stylesheet" href="../css/bootstrap.min.css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
        </head>
        <body> 
						
					<div class="container">
  				<h2>Feedback Display</h2> 
						
						
          <!-- Good feedback only -->
				  <div class="panel panel-success"> 
					<div class="panel-heading">Good Feedback</div>
  				<div class="panel-body">
					<ol>
            <xsl:for-each select="/feedbacks/feedback/rating[text()>3]">
              
              <li>
                <xsl:value-of select="../text"/>
                </li>

            </xsl:for-each>
          </ol>
					</div>
					</div>
						
					<!-- OK feedback only -->
				  <div class="panel panel-warning"> 
					<div class="panel-heading">OK Feedback</div>
  				<div class="panel-body">
					<ol>
            <xsl:for-each select="/feedbacks/feedback/rating[text()=3]">
              
              <li>
                <xsl:value-of select="../text"/>
              </li>

            </xsl:for-each>
          </ol>
					</div>	
					</div>
						
					<!-- Bad feedback only -->
				  <div class="panel panel-danger"> 
					<div class="panel-heading">Bad Feedback</div>
  				<div class="panel-body">
					<ol>
            <xsl:for-each select="/feedbacks/feedback/rating[text() &lt; 3]">
              
              <li>
                <xsl:value-of select="../text"/>
              </li>

            </xsl:for-each>
          </ol>
					</div>	
					</div>	
						
						
					</div>
				</body>
			</html>
            
	</xsl:template>
</xsl:transform>