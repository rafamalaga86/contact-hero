{% extends 'templates/base.volt' %}

{% block main %}
  <div class="container update-contact">
    <section class="title">
      <h1 class="text-center">Update a Contact</h1>
    </section>
    <section>
      <form action="/contacts/{{ contact.id }}" method="POST">
        {{ form.render('csrf', ['value': security.getToken()]) }}

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>First Name: *</label>
              {{ form.render('firstName', ["class": "form-control", "placeholder": "John"]) }}
            </div>
            <div class="form-group">
              <label>Last Name: *</label>
              {{ form.render('lastName', ["class": "form-control", "placeholder": "Doe"]) }}
            </div>
            <div class="form-group">
              <label>Email: *</label>
              {{ form.render('email', ["class": "form-control", "placeholder": "john@doe.com"]) }}
            </div>
            <div class="form-group">
              <label>Description:</label>
              {{ form.render('description', ["class": "form-control", "placeholder": "Write here a description of the person"]) }}
            </div>
          </div>

          <div class="col-md-6">
            <figure>
              <img src="/img/{{ contact.picture }}" alt="">
            </figure>
          </div>
        </div>

        <div class="row">
          <div class="col col-md-6">
            <button class="btn btn-primary" type="submit">Update the contact</button>
          </div>
        </div>
        
      </form>

    </section>
  </div>
{% endblock %}
