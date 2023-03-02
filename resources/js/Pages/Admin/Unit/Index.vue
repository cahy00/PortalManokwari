<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Kategori</h1>
                <br />

                <div class="card mb-4">
                    <div class="card-header"></div>
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
                                            id="title"
                                            placeholder="Masukkan Kategori"
                                            autofocus
                                            v-model="form.title"
                                        />
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
                                    <tbody></tbody>
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
    },
    data() {
        return {
            form: {
                title: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(
                "/admin/category/create",
                {
                    title: this.form.title,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Postingan Berhasil Disimpan.",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    },
                }
            );
        },
        destroy(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Inertia.delete(`/admin/category/delete/${id}`);
                    Swal.fire({
                        title: "Deleted!",
                        text: "Category Berhasil Dihapus!.",
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false,
                    });
                }
            });
        },
    },
};
</script>
