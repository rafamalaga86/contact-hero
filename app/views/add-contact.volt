{% extends 'templates/base.volt' %}

{% block main %}
  <div class="container add-contact">
    <section class="title">
      <h1 class="text-center">Add a Contact</h1>
    </section>
    <section>
      <form class="container" action="/contacts/new" method="POST">
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
            <p>An image will be assigned for the contact at random</p>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Email: *</label>
              {{ form.render('email', ["class": "form-control", "placeholder": "john@doe.com"]) }}
            </div>
            <div class="form-group">
              <label>Description:</label>
              {{ form.render('description', ["class": "form-control", "placeholder": "Write here a description of the person"]) }}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col col-md-6">
            <button class="btn btn-primary" type="submit">Add contact</button>
          </div>
        </div>
        
      </form>

    </section>
  </div>

{% endblock %}