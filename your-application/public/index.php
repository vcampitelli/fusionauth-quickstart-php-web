<html>
<head>
  <meta charset="utf-8" />
  <title>FusionAuth OpenID and PKCE example</title>
  <link rel="stylesheet" href="/static/css/changebank.css">
</head>
<body>
  <div id="page-container">
    <div id="page-header">
      <div id="logo-header">
        <img src="https://fusionauth.io/assets/img/samplethemes/changebank/changebank.svg" />
        <a class="button-lg" href="{% url 'oidc_authentication_init' %}">Login</a>
      </div>

      <div id="menu-bar" class="menu-bar">
        <a class="menu-link">About</a>
        <a class="menu-link">Services</a>
        <a class="menu-link">Products</a>
        <a class="menu-link" style="text-decoration-line: underline;">Home</a>
      </div>
    </div>

    <div style="flex: 1;">
      <div class="column-container">
        <div class="content-container">
          <div style="margin-bottom: 100px;">
            <h1>Welcome to Changebank</h1>
            <p>To get started, <a href="{% url 'oidc_authentication_init' %}">log in or create a new account</a>.</p>
          </div>
        </div>
        <div style="flex: 0;">
          <img src="/static/img/money.jpg" style="max-width: 800px;"/>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
