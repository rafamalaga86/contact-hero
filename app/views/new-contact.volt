{% extends 'templates/base.volt' %}

{% block main %}
  <div class="container">
    <section class="title">
      <h1 class="text-center">Add a Contact</h1>
    </section>
    <section>
      <form action="/contacts/new" method="POST">
        <input type="hidden" name={{ csrf['name'] }} value={{ csrf['token'] }}>

        <div class="row">
          <div class="col col-md-6">
            <div class="form-group">
              <label>First Name:</label>
              <input class="form-control" type="text" placeholder="John" name="firstName">
            </div>
            <div class="form-group">
              <label>Second Name:</label>
              <input class="form-control" type="text" placeholder="Doe" name="secondName">
            </div>
          </div>

          <div class="col col-md-6">
            <div class="form-group">
              <label>Email:</label>
              <input class="form-control" type="text" placeholder="john@doe.com" name="firstName">
            </div>
            <div class="form-group">
              <label>Second Name:</label>
              <textarea class="form-control" type="text" placeholder="Write here a description of the person" name="secondName"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col col-md-6">
            <button class="btn btn-primary" type="submit">Add Contact</button>
          </div>
        </div>
        
      </form>

    </section>
  </div>

{% endblock %}