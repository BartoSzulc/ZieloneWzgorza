import GLightbox from 'glightbox';

export function initgLightbox() {

    const customLightboxHTML = 
    `<div id="glightbox-body" class="glightbox-container">
      <div class="gloader visible"></div>
      <div class="goverlay"></div>
      <div class="gcontainer">
      <div id="glightbox-slider" class="gslider"></div>
      <button class="gnext gbtn rotate-180" tabindex="0" aria-label="Next" data-customattribute="example">
      <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42Z" stroke="#B4C37C" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M22.8563 30.3561L16.5 23.9998L22.8563 17.6436" stroke="#B4C37C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 24H31.5" stroke="#B4C37C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      </button>
      <button class="gprev gbtn" tabindex="1" aria-label="Previous">
      <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42Z" stroke="#B4C37C" stroke-width="2" stroke-miterlimit="10"/>
      <path d="M25.1437 30.3561L31.5 23.9998L25.1437 17.6436" stroke="#B4C37C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M16.5 24H31.5" stroke="#B4C37C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>      
      </button>
      <button class="gclose" tabindex="2" aria-label="Close">
      <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M31.7534 28.6524C31.8316 28.7257 31.8936 28.8127 31.9359 28.9085C31.9782 29.0043 32 29.1069 32 29.2106C32 29.3143 31.9782 29.4169 31.9359 29.5127C31.8935 29.6085 31.8315 29.6955 31.7533 29.7688C31.6751 29.8421 31.5823 29.9003 31.4801 29.9399C31.3779 29.9796 31.2684 30 31.1578 30C31.0473 30 30.9378 29.9796 30.8356 29.9399C30.7334 29.9002 30.6406 29.842 30.5624 29.7687L16 16.1166L1.43759 29.7687C1.27968 29.9168 1.0655 30 0.842161 30C0.618825 30 0.404629 29.9169 0.246693 29.7688C0.0887574 29.6208 1.9349e-05 29.42 3.16386e-09 29.2106C-1.93427e-05 29.0012 0.0886819 28.8004 0.24659 28.6524L14.8091 15L0.24659 1.34764C0.0886819 1.19958 -1.93427e-05 0.998766 3.16386e-09 0.789389C9.58227e-06 0.685716 0.0218002 0.58306 0.064128 0.487282C0.106456 0.391504 0.168491 0.30448 0.246693 0.231178C0.324895 0.157877 0.417732 0.0997337 0.519902 0.060068C0.622073 0.0204024 0.731576 -8.97745e-06 0.842161 2.96206e-09C1.0655 1.81397e-05 1.27968 0.08321 1.43759 0.231275L16 13.8834L30.5624 0.231275C30.6406 0.157961 30.7334 0.0998022 30.8356 0.06012C30.9378 0.0204377 31.0473 8.98338e-06 31.1578 2.96206e-09C31.2684 -8.97745e-06 31.3779 0.0204024 31.4801 0.060068C31.5823 0.0997337 31.6751 0.157877 31.7533 0.231178C31.8315 0.30448 31.8935 0.391504 31.9359 0.487282C31.9782 0.58306 32 0.685716 32 0.789389C32 0.893062 31.9782 0.995722 31.9359 1.09151C31.8936 1.18729 31.8316 1.27433 31.7534 1.34764L17.191 15L31.7534 28.6524Z" fill="black"/>
        </svg>
    
      </button>
    </div>
    </div>`;
  
    const lightbox = GLightbox({ 
      lightboxHTML: customLightboxHTML,
    });
}