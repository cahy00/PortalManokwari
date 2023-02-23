<template>
    <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Login</h3>
    </div>
    <div class="card-body">
        <form @submit.prevent="submit">
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputEmail"
                    type="email"
                    placeholder="name@example.com"
                    v-model="form.email"
                />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputPassword"
                    type="password"
                    placeholder="Password"
                    v-model="form.password"
                />
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-check mb-3">
                <input
                    class="form-check-input"
                    id="inputRememberPassword"
                    type="checkbox"
                    value=""
                />
                <label class="form-check-label" for="inputRememberPassword"
                    >Remember Password</label
                >
            </div>
            <div
                class="d-flex align-items-center justify-content-between mt-4 mb-0"
            >
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small">
            <a href="/register">Need an account? Sign up!</a>
        </div>
    </div>
</template>

<script>
import Layout from "../../Layouts/LayoutLogin.vue";
import { Inertia } from "@inertiajs/inertia";

export default {
    layout: Layout,
    data() {
        return {
            form: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post("/login", {
                email: this.form.email,
                password: this.form.password,
            });
        },
    },
};
</script>
