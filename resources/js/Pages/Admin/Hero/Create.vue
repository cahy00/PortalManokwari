<template>
    <Head title="Create - Heroes"></Head>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Pengumuman</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link href="/hero" class="btn btn-success"
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
                        <h5>
                            <i class="fa fa-bookmark"></i> Tambah Pengumuman
                        </h5>
                        <hr />
                        <form @submit.prevent="submit">
                            <div class="mb">
                                <div class="row">
                                    <div class="col-6">
                                        <label for=""
                                            >Title
                                            <span style="color: red"
                                                >*</span
                                            ></label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Masukkan Judul"
                                            autofocus
                                            v-model="form.title"
                                        />
                                    </div>
                                    <div class="col-6">
                                        <label for="picture"
                                            >Photo<span style="color: red"
                                                >*</span
                                            ></label
                                        >
                                        <input
                                            type="file"
                                            class="form-control"
                                            @input="
                                                form.picture =
                                                    $event.target.files[0]
                                            "
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="desc">Deskripsi</label>
                                <Editor
                                    api-key="tym8sv917r013htcr07qbxet8nmp7axloc18omawdb22nvay"
                                    :init="{
                                        menubar: false,
                                        plugins: 'lists link',
                                        toolbar:
                                            'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link',
                                    }"
                                    v-model="form.desc"
                                />
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
import Editor from "@tinymce/tinymce-vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";

export default {
    layout: Layout,
    components: {
        Editor,
        Link,
    },
    data() {
        return {
            form: {
                title: "",
                picture: "",
                desc: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(
                "/hero/create",
                {
                    title: this.form.title,
                    picture: this.form.picture,
                    desc: this.form.desc,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Pengumuman Berhasil Disimpan.",
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
