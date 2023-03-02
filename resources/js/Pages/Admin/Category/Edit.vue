<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Kategori</h1>
                <br />

                <div class="card mb-4">
                    <div class="card-header">
                        <!-- <Link
                            href="/admin/category/create"
                            class="btn btn-success"
                            ><i class="fa fa-angle-left" aria-hidden="true"></i>
                            Kembali</Link
                        > -->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5>
                                    <i
                                        class="fa fa-plus-circle"
                                        aria-hidden="true"
                                    ></i>
                                    Tambah Kategori
                                </h5>
                                <hr />
                                <form @submit.prevent="submit">
                                    <div class="mb-4">
                                        <label for="title"
                                            >Kategori
                                            <span style="color: red"
                                                >*</span
                                            ></label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': errors.title,
                                            }"
                                            id="title"
                                            placeholder="Masukkan Kategori"
                                            autofocus
                                            v-model="form.title"
                                        />
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.title"
                                        >
                                            {{ errors.title }}
                                        </div>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-sm"
                                    >
                                        Simpan
                                    </button>
                                    <button
                                        type="reset"
                                        class="btn btn-default btn-sm"
                                    >
                                        Reset
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5>
                                    <i class="fa fa-bookmark"></i> Daftar
                                    Kategori
                                </h5>
                                <hr />
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="data in category"
                                            :key="data.id"
                                        >
                                            <td>{{ data.id }}</td>
                                            <td>{{ data.title }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";
import Layout from "../../../Layouts/Layout.vue";
import Daftar from "./Index.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    layout: Layout,
    components: {
        Daftar,
        Link,
    },
    props: {
        errors: Object,
        category: Object,
        dataId: Object,
    },
    data() {
        return {
            form: {
                title: this.dataId.title,
            },
        };
    },
    methods: {
        submit() {
            Inertia.put(
                `/admin/category/edit/${this.dataId.id}`,
                {
                    title: this.form.title,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Postingan Berhasil Diubah.",
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
