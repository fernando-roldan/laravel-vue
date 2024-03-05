<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" v-model="password" required>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            loginRoute: {
                type: String,
                required: true
            },
            homeRoute: {
                type: String,
                required: true
            }
        },
        data() {
          return {
            email: '',
            password: ''
          };
        },
        methods: {
          login() {
            // Envía la solicitud de inicio de sesión al servidor
            axios.post(this.loginRoute, {
              email: this.email,
              password: this.password
            })
            .then(response => {
              // Maneja la respuesta del servidor (p. ej., redirecciona al usuario a una página de inicio)
              console.log(response.data);
              window.location.href = this.homeRoute;
              localStorage.setItem('token', response.data.token);
            })
            .catch(error => {
              // Maneja errores (p. ej., muestra un mensaje de error al usuario)
              console.error(error);
            });
          }
        }
    };
</script>