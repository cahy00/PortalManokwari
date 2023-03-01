<template>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <Link
                        href="/admin/dashboard"
                        :class="{
                            active: $page.url.startsWith('/admin/dashboard'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </Link>
                    <div class="sb-sidenav-menu-heading">Modul</div>
                    <Link
                        href="/admin/post"
                        :class="{
                            active: $page.url.startsWith('/admin/post'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        Postingan
                    </Link>
                    <Link
                        href="/admin/draft"
                        :class="{
                            active: $page.url.startsWith('/admin/draft'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-archive"></i>
                        </div>
                        Draft Postingan
                    </Link>
                    <Link
                        href="/admin/category/create"
                        :class="{
                            active: $page.url.startsWith(
                                '/admin/category/create'
                            ),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-columns"></i>
                        </div>
                        Kategori
                    </Link>
                    <Link
                        href="/admin/lesson"
                        :class="{
                            active: $page.url.startsWith('/admin/lesson'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-chart-area"></i>
                        </div>
                        Tag
                    </Link>
                    <div class="sb-sidenav-menu-heading">Profil</div>
                    <Link
                        href="/admin/employe"
                        :class="{
                            active: $page.url.startsWith('/admin/employe'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        Pegawai
                    </Link>
                    <Link
                        href="/admin/departement"
                        :class="{
                            active: $page.url.startsWith('/admin/departement'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        Unit Kerja
                    </Link>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <Link
                        href="/admin/hero"
                        :class="{
                            active: $page.url.startsWith('/admin/hero'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-list-ul"></i>
                        </div>
                        Pengumuman
                    </Link>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>
