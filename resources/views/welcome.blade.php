<x-head />
  <!-- ======= Header ======= -->
  <x-nav />
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <x-hero />
  <!-- End Hero Section -->
  {{-- Main Body --}}
  <x-body :projects="$projects" :employees="$employees"/>
  <x-footer />
