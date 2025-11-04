<script setup lang="ts">
// import { dashboard, login, register } from '@/routes';
import { Head} from '@inertiajs/vue3';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

<!--        <header-->
<!--            class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl"-->
<!--        >-->
<!--            <nav class="flex items-center justify-end gap-4">-->
<!--                <Link-->
<!--                    v-if="$page.props.auth.user"-->
<!--                    :href="dashboard()"-->
<!--                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"-->
<!--                >-->
<!--                    Dashboard-->
<!--                </Link>-->
<!--                <template v-else>-->
<!--                    <Link-->
<!--                        :href="login()"-->
<!--                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"-->
<!--                    >-->
<!--                        Log in-->
<!--                    </Link>-->
<!--                    <Link-->
<!--                        v-if="canRegister"-->
<!--                        :href="register()"-->
<!--                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"-->
<!--                    >-->
<!--                        Register-->
<!--                    </Link>-->
<!--                </template>-->
<!--            </nav>-->
<!--        </header>-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Signup Welcome Message -->
            <div class="d-flex flex-column flex-center flex-column-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center text-center p-10">
                    <!--begin::Wrapper-->
                    <div class="card card-flush w-md-650px py-5">
                        <div class="card-body py-15 py-lg-20">
                            <!--begin::Logo-->
                            <div class="mb-7">
                                <a href="index.html" class="">
                                    <img alt="Logo" src="../../assets/media/logos/custom-2.svg" class="h-40px" />
                                </a>
                            </div>
                            <!--end::Logo-->
                            <!--begin::Title-->
                            <h1 class="fw-bolder text-gray-900 mb-5">Welcome to Metronic</h1>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fw-semibold fs-6 text-gray-500 mb-7">This is your opportunity to get creative and make a name
                                <br />that gives readers an idea</div>
                            <!--end::Text-->
                            <!--begin::Illustration-->
                            <div class="mb-0">
                                <img src="../../assets/media/auth/welcome.png" class="mw-100 mh-300px theme-light-show" alt="" />
                                <img src="../../assets/media/auth/welcome-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                            </div>
                            <!--end::Illustration-->
                            <!--begin::Link-->
                            <div class="mb-0">
                                <a href="index.html" class="btn btn-sm btn-primary">Go To Dashboard</a>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Authentication - Signup Welcome Message-->
        </div>
        <!--end::Root-->
</template>
<!--begin::Page bg image-->
<style>body { background-image: url('../../assets/media/auth/bg8.jpg'); } [data-bs-theme="dark"] body { background-image: url('../../assets/media/auth/bg8-dark.jpg'); }</style>
<!--end::Page bg image-->
