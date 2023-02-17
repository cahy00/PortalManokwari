<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Postingan</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link href="/post" class="btn btn-success"
                                    ><i
                                        class="fa fa-angle-left"
                                        aria-hidden="true"
                                    ></i>
                                    Kembali</Link
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5><i class="fa fa-bookmark"></i> Tambah Postingan</h5>
                        <hr />
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="title">Judul</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': errors.title,
                                            }"
                                            v-model="form.title"
                                            id="title"
                                            placeholder="Masukkan judul"
                                            autofocus
                                        />
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.title"
                                        >
                                            {{ errors.title }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="category_id"
                                            >Kategori</label
                                        >
                                        <select
                                            id="category_id"
                                            v-model="form.category_id"
                                            class="form-select"
                                            :class="{
                                                'is-invalid': errors.title,
                                            }"
                                        >
                                            <option
                                                v-for="categories in category"
                                                :key="categories.id"
                                                :value="categories.id"
                                            >
                                                {{ categories.title }}
                                            </option>
                                        </select>
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.category_id"
                                        >
                                            {{ errors.category_id }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="thumbnail"
                                            >Gambar Utama</label
                                        >
                                        <input
                                            type="file"
                                            class="form-control"
                                            @input="
                                                form.thumbnail =
                                                    $event.target.files[0]
                                            "
                                        />
                                        <div
                                            v-if="errors.thumbnail"
                                            class="invalid-feedback"
                                        >
                                            {{ errors.thumbnail }}
                                        </div>
                                        <div
                                            v-if="errors[0]"
                                            class="invalid-feedback"
                                        >
                                            {{ errors[0] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-">
                                        <label for="status">Status</label>
                                        <select
                                            id="status"
                                            class="form-select"
                                            v-model="form.status"
                                        >
                                            <option value="0">Draft</option>
                                            <option value="1">Posting</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="body">Isi</label>
                                <Editor
                                    api-key="tym8sv917r013htcr07qbxet8nmp7axloc18omawdb22nvay"
                                    :init="{
                                        menubar: false,
                                        plugins: 'lists link image',
                                        toolbar:
                                            'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image',
                                        image_title: true,
                                        file_picker_types: 'image',
                                        a11y_advanced_options: true,
                                    }"
                                    v-model="form.body"
                                    :class="{
                                        'is-invalid': errors.description,
                                    }"
                                />
                                <div
                                    v-if="errors.body"
                                    class="invalid-feedback"
                                >
                                    {{ errors.body }}
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary btn-md border-0 shadow me-2"
                            >
                                Simpan
                            </button>
                            <button
                                type="reset"
                                class="btn btn-warning btn-md border-0 shadow me-2"
                            >
                                Reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Editor from "@tinymce/tinymce-vue";
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";

export default {
    layout: Layout,
    components: {
        Link,
        Editor,
    },
    props: {
        category: Object,
        user: Object,
        errors: Object,
    },
    data() {
        return {
            form: {
                title: "",
                category_id: "",
                body: "",
                thumbnail: "",
                status: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(
                "/post/create",
                {
                    title: this.form.title,
                    category_id: this.form.category_id,
                    body: this.form.body,
                    thumbnail: this.form.thumbnail,
                    status: this.form.status,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Siswa Berhasil Disimpan.",
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
