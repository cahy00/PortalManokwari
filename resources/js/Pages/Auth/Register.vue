<template>
    <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Create Account</h3>
    </div>
    <div class="card-body">
        <form @submit.prevent="register">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            :class="{ 'is-invalid': errors.name }"
                            id="inputFirstName"
                            type="text"
                            placeholder="Enter your name"
                            v-model="form.name"
                        />
                        <label for="inputFirstName"
                            >Name<span style="color: red">*</span></label
                        >
                        <div class="invalid-feedback" v-if="errors.name">
                            {{ errors.name }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputEmail"
                    type="email"
                    placeholder="name@example.com"
                    v-model="form.email"
                    :class="{ 'is-invalid': errors.email }"
                />
                <label for="inputEmail"
                    >Email address<span style="color: red">*</span></label
                >
                <div class="invalid-feedback" v-if="errors.email">
                    {{ errors.email }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            id="inputPassword"
                            type="password"
                            placeholder="Create a password"
                            v-model="form.password"
                            :class="{ 'is-invalid': errors.email }"
                        />
                        <label for="inputPassword"
                            >Password<span style="color: red">*</span></label
                        >
                        <div class="invalid-feedback" v-if="errors.password">
                            {{ errors.password }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            id="inputPasswordConfirm"
                            type="password"
                            placeholder="Confirm password"
                            v-model="form.confirm_password"
                        />
                        <label for="inputPasswordConfirm"
                            >Confirm Password<span style="color: red"
                                >*</span
                            ></label
                        >
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";
import Layout from "../../Layouts/LayoutLogin.vue";

export default {
    layout: Layout,
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                name: "",
                email: "",
                password: "",
                confirm_password: "",
            },
        };
    },
    methods: {
        register() {
            Inertia.post(
                "/register",
                {
                    name: this.form.name,
                    email: this.form.email,
                    password: this.form.password,
                    confirm_password: this.form.confirm_password,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Akun Berhasil Dibuat.",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    },
                }
            );
        },
    },
};
</script>
