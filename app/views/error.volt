{% extends "templates/base.volt" %}

{% block main %}
    <div class="container error">
      <div class="row">
        <div class="col text-center error-status-code">
          <h2>{{ statusCode }}</h2>
        </div>
      </div>
    </div>
{% endblock %}