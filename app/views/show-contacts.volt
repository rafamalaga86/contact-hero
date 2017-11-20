{% extends "templates/base.volt" %}

{% block main %}
  <div class="container show-contacts">
    <div class="grid">

      {% for contact in contacts %}
        <div class="card card-{{ contact['id'] }} card-colour-{{ contact['id'] % 10 }}" data-contact-id="{{ contact['id'] }}">
          <img class="card-contactPicture" src="/img/{{ contact['picture'] }}" alt="{{ contact['firstName']|e }}">
          <div class="card-highlight">{{ contact['firstName']|e }}</div>
          <div class="card-content">
              <div class="card-contactTitle">{{ contact['firstName']|e }} {{ contact['lastName']|e }}</div>
              <div class="card-contactTitle">{{ contact['email']|e }}</div>
              <p class="card-text">{{ contact['description']|e }}</p>
              <div class="card-contactTitle date">Created at: {{ contact['createdAt']|e }}</div>
              <div class="btn-container">
                <button class="btn btn-default btn-delete">Delete</button>
                <a class="btn btn-default" href="/contacts/{{ contact['id'] }}">Update</a>
              </div>
          </div>
        </div>

      {% else %}
          <span>Sorry, we did not find any contact</span>
      {% endfor %}

    </div>
  </div>
{% endblock %}
