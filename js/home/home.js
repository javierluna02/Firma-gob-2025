
        // // Función para mostrar que el JavaScript está funcionando
        // function showJSWorking() {
        //     // Crear un indicador visual
        //     const indicator = document.createElement('div');
        //     indicator.style.cssText = `
        //         position: fixed;
        //         top: 10px;
        //         left: 10px;
        //         background: #4CAF50;
        //         color: white;
        //         padding: 10px 15px;
        //         border-radius: 5px;
        //         font-size: 12px;
        //         font-weight: bold;
        //         z-index: 10000;
        //         box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        //         animation: pulse 2s infinite;
        //     `;
        //     indicator.textContent = '🚀 JS ACTIVO';
        //     document.body.appendChild(indicator);

        //     // Remover después de 5 segundos
        //     setTimeout(() => {
        //         if (indicator.parentNode) {
        //             indicator.parentNode.removeChild(indicator);
        //         }
        //     }, 5000);
        // }

        // // Mostrar indicador inmediatamente
        // showJSWorking();

        // // Función para animar las tarjetas al cargar
        // function animateCardsOnLoad() {
        //     const cards = document.querySelectorAll('.card');
        //     cards.forEach((card, index) => {
        //         setTimeout(() => {
        //             card.style.animation = 'shake 0.5s ease-in-out';
        //             setTimeout(() => {
        //                 card.style.animation = '';
        //             }, 500);
        //         }, index * 200);
        //     });
        // }

        // // Función para hacer que las tarjetas sean más interactivas
        // function makeCardsInteractive() {
        //     const cards = document.querySelectorAll('.card');
        //     cards.forEach(card => {
        //         // Añadir cursor pointer
        //         card.style.cursor = 'pointer';
                
        //         // Efecto hover más visible
        //         card.addEventListener('mouseenter', () => {
        //             card.style.transform = 'translateY(-8px) scale(1.02)';
        //             card.style.boxShadow = '0 15px 35px rgba(0,0,0,0.3)';
        //         });
                
        //         card.addEventListener('mouseleave', () => {
        //             card.style.transform = '';
        //             card.style.boxShadow = '';
        //         });
                
        //         // Efecto click
        //         card.addEventListener('click', () => {
        //             const title = card.querySelector('h3').textContent;
        //             alert(`¡Has seleccionado: ${title}! 🎉`);
        //         });
        //     });
        // }

        
        // // ========================================
        // // FUNCIONALIDADES INTERACTIVAS DEL HOME
        // // ========================================

        // // 1. CAROUSEL DE INSTITUCIONES (Section 7)
        // class InstitutionCarousel {
        //     constructor() {
        //         this.currentIndex = 0;
        //         this.logos = document.querySelectorAll('.section-7 .div-2_div1 .Logo');
        //         this.prevBtn = document.querySelector('.section-7 .btn:first-child');
        //         this.nextBtn = document.querySelector('.section-7 .btn:last-child');
        //         this.totalLogos = this.logos.length;
                
        //         this.init();
        //     }

        //     init() {
        //         if (this.prevBtn && this.nextBtn) {
        //             this.prevBtn.addEventListener('click', () => this.prev());
        //             this.nextBtn.addEventListener('click', () => this.next());
        //         }
                
        //         // Auto-rotación cada 5 segundos
        //         setInterval(() => this.next(), 5000);
                
        //         this.updateVisibility();
        //     }

        //     next() {
        //         this.currentIndex = (this.currentIndex + 1) % this.totalLogos;
        //         this.updateVisibility();
        //     }

        //     prev() {
        //         this.currentIndex = (this.currentIndex - 1 + this.totalLogos) % this.totalLogos;
        //         this.updateVisibility();
        //     }

        //     updateVisibility() {
        //         this.logos.forEach((logo, index) => {
        //             if (index === this.currentIndex) {
        //                 logo.style.opacity = '1';
        //                 logo.style.transform = 'scale(1.1)';
        //             } else {
        //                 logo.style.opacity = '0.6';
        //                 logo.style.transform = 'scale(1)';
        //             }
        //         });
        //     }
        // }

        // // 2. CAROUSEL DE CASOS DE ÉXITO (Section 11)
        // class SuccessCarousel {
        //     constructor() {
        //         this.currentIndex = 0;
        //         this.cards = document.querySelectorAll('.section-11 .div-2 .Cards');
        //         this.prevBtn = document.querySelector('.section-11 .btn:first-child');
        //         this.nextBtn = document.querySelector('.section-11 .btn:last-child');
        //         this.totalCards = this.cards.length;
                
        //         this.init();
        //     }

        //     init() {
        //         if (this.prevBtn && this.nextBtn) {
        //             this.prevBtn.addEventListener('click', () => this.prev());
        //             this.nextBtn.addEventListener('click', () => this.next());
        //         }
                
        //         this.updateVisibility();
        //     }

        //     next() {
        //         this.currentIndex = (this.currentIndex + 1) % this.totalCards;
        //         this.updateVisibility();
        //     }

        //     prev() {
        //         this.currentIndex = (this.currentIndex - 1 + this.totalCards) % this.totalCards;
        //         this.updateVisibility();
        //     }

        //     updateVisibility() {
        //         this.cards.forEach((card, index) => {
        //             if (index === this.currentIndex) {
        //                 card.style.display = 'block';
        //                 card.style.animation = 'fadeIn 0.5s ease-in';
        //             } else {
        //                 card.style.display = 'none';
        //             }
        //         });
        //     }
        // }

        // // 3. ANIMACIONES DE SCROLL
        // class ScrollAnimations {
        //     constructor() {
        //         this.observerOptions = {
        //             threshold: 0.1,
        //             rootMargin: '0px 0px -50px 0px'
        //         };
                
        //         this.init();
        //     }

        //     init() {
        //         // Observar elementos para animaciones
        //         const observer = new IntersectionObserver((entries) => {
        //             entries.forEach(entry => {
        //                 if (entry.isIntersecting) {
        //                     entry.target.classList.add('animate-in');
        //                 }
        //             });
        //         }, this.observerOptions);

        //         // Elementos a animar
        //         const animatedElements = document.querySelectorAll('.card, .Cards, .section-5 .Cards');
        //         animatedElements.forEach(el => observer.observe(el));
        //     }
        // }

        // // 4. INTERACTIVIDAD DE LAS TARJETAS
        // class CardInteractions {
        //     constructor() {
        //         this.init();
        //     }

        //     init() {
        //         // Efecto hover en las tarjetas de beneficios
        //         const benefitCards = document.querySelectorAll('.section-5 .Cards');
        //         benefitCards.forEach(card => {
        //             card.addEventListener('mouseenter', () => {
        //                 card.style.transform = 'translateY(-10px)';
        //                 card.style.boxShadow = '0 15px 35px rgba(0,0,0,0.2)';
        //                 card.style.border = '2px solid #003579';
        //             });

        //             card.addEventListener('mouseleave', () => {
        //                 card.style.transform = 'translateY(0)';
        //                 card.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
        //                 card.style.border = '2px solid transparent';
        //             });

        //             // Efecto click
        //             card.addEventListener('click', () => {
        //                 card.style.transform = 'scale(0.98)';
        //                 setTimeout(() => {
        //                     card.style.transform = 'translateY(-10px)';
        //                 }, 150);
        //                 showNotification('¡Beneficio seleccionado! 🎯', 'info');
        //             });
        //         });

        //         // Efecto click en las tarjetas del grid
        //         const gridCards = document.querySelectorAll('.card');
        //         gridCards.forEach(card => {
        //             card.addEventListener('click', () => {
        //                 // Efecto de pulso al hacer clic
        //                 card.style.transform = 'scale(0.95)';
        //                 card.style.boxShadow = '0 20px 40px rgba(0,0,0,0.3)';
        //                 setTimeout(() => {
        //                     card.style.transform = '';
        //                     card.style.boxShadow = '';
        //                 }, 300);
                        
        //                 // Mostrar información de la característica
        //                 const title = card.querySelector('h3').textContent;
        //                 showNotification(`Característica: ${title} ✨`, 'success');
        //             });
        //         });

        //         // Efecto hover en botones de navegación
        //         const navButtons = document.querySelectorAll('.section-2 button');
        //         navButtons.forEach(button => {
        //             button.addEventListener('mouseenter', () => {
        //                 button.style.transform = 'translateY(-3px)';
        //                 button.style.boxShadow = '0 8px 20px rgba(0, 53, 121, 0.3)';
        //             });

        //             button.addEventListener('mouseleave', () => {
        //                 button.style.transform = 'translateY(0)';
        //                 button.style.boxShadow = '';
        //             });
        //         });
        //     }
        // }

        // // 5. NAVEGACIÓN SUAVE
        // class SmoothNavigation {
        //     constructor() {
        //         this.init();
        //     }

        //     init() {
        //         // Navegación suave para los botones de la sección 2
        //         const navButtons = document.querySelectorAll('.section-2 button');
        //         navButtons.forEach(button => {
        //             button.addEventListener('click', (e) => {
        //                 const targetId = button.textContent.toLowerCase();
        //                 const targetSection = document.querySelector(`.section-${this.getSectionNumber(targetId)}`);
                        
        //                 if (targetSection) {
        //                     e.preventDefault();
        //                     targetSection.scrollIntoView({
        //                         behavior: 'smooth',
        //                         block: 'start'
        //                     });
        //                 }
        //             });
        //         });
        //     }

        //     getSectionNumber(targetId) {
        //         const sectionMap = {
        //             'beneficios': '5',
        //             'instituciones': '7',
        //             'integración': '9',
        //             'disponibilidad': '12'
        //         };
        //         return sectionMap[targetId] || '1';
        //     }
        // }

        // // 6. CONTADOR ANIMADO
        // class AnimatedCounter {
        //     constructor() {
        //         this.init();
        //     }

        //     init() {
        //         const counters = document.querySelectorAll('.counter');
        //         const observer = new IntersectionObserver((entries) => {
        //             entries.forEach(entry => {
        //                 if (entry.isIntersecting) {
        //                     this.animateCounter(entry.target);
        //                 }
        //             });
        //         }, { threshold: 0.5 });

        //         counters.forEach(counter => observer.observe(counter));
        //     }

        //     animateCounter(element) {
        //         const target = parseInt(element.getAttribute('data-target'));
        //         const duration = 2000;
        //         const step = target / (duration / 16);
        //         let current = 0;

        //         const timer = setInterval(() => {
        //             current += step;
        //             if (current >= target) {
        //                 current = target;
        //                 clearInterval(timer);
        //             }
        //             element.textContent = Math.floor(current);
        //         }, 16);
        //     }
        // }

        // // 7. BÚSQUEDA INTERACTIVA
        // class SearchFunctionality {
        //     constructor() {
        //         this.searchInput = document.querySelector('.buscador input');
        //         this.init();
        //     }

        //     init() {
        //         if (this.searchInput) {
        //             this.searchInput.addEventListener('input', (e) => {
        //                 const query = e.target.value.toLowerCase();
        //                 this.performSearch(query);
        //             });

        //             this.searchInput.addEventListener('focus', () => {
        //                 this.searchInput.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 53, 121, 0.2)';
        //             });

        //             this.searchInput.addEventListener('blur', () => {
        //                 this.searchInput.parentElement.style.boxShadow = '';
        //             });
        //         }
        //     }

        //     performSearch(query) {
        //         // Simular búsqueda en tiempo real
        //         const searchableElements = document.querySelectorAll('h1, h2, h3, p');
        //         searchableElements.forEach(element => {
        //             const text = element.textContent.toLowerCase();
        //             if (text.includes(query) && query.length > 2) {
        //                 element.style.backgroundColor = 'rgba(255, 193, 0, 0.3)';
        //                 setTimeout(() => {
        //                     element.style.backgroundColor = '';
        //                 }, 2000);
        //             }
        //         });
        //     }
        // }

        // // 8. MENÚ RESPONSIVE
        // class ResponsiveMenu {
        //     constructor() {
        //         this.menuButton = document.querySelector('.menu img');
        //         this.init();
        //     }

        //     init() {
        //         if (this.menuButton) {
        //             this.menuButton.addEventListener('click', () => {
        //                 this.toggleMenu();
        //             });
        //         }
        //     }

        //     toggleMenu() {
        //         const menu = document.querySelector('.cuarta-seccion-header');
        //         if (menu) {
        //             menu.classList.toggle('menu-active');
        //         }
        //     }
        // }

        // // Inicializar todas las funcionalidades cuando el DOM esté listo
        // document.addEventListener('DOMContentLoaded', () => {
        //     console.log('Inicializando funcionalidades JavaScript...');
            
        //     try {
        //         new InstitutionCarousel();
        //         console.log('✅ Carousel de instituciones inicializado');
        //     } catch (error) {
        //         console.error('❌ Error en InstitutionCarousel:', error);
        //     }

        //     try {
        //         new SuccessCarousel();
        //         console.log('✅ Carousel de casos de éxito inicializado');
        //     } catch (error) {
        //         console.error('❌ Error en SuccessCarousel:', error);
        //     }

        //     try {
        //         new ScrollAnimations();
        //         console.log('✅ Animaciones de scroll inicializadas');
        //     } catch (error) {
        //         console.error('❌ Error en ScrollAnimations:', error);
        //     }

        //     try {
        //         new CardInteractions();
        //         console.log('✅ Interacciones de tarjetas inicializadas');
        //     } catch (error) {
        //         console.error('❌ Error en CardInteractions:', error);
        //     }

        //     try {
        //         new SmoothNavigation();
        //         console.log('✅ Navegación suave inicializada');
        //     } catch (error) {
        //         console.error('❌ Error en SmoothNavigation:', error);
        //     }

        //     try {
        //         new AnimatedCounter();
        //         console.log('✅ Contador animado inicializado');
        //     } catch (error) {
        //         console.error('❌ Error en AnimatedCounter:', error);
        //     }

        //     try {
        //         new SearchFunctionality();
        //         console.log('✅ Funcionalidad de búsqueda inicializada');
        //     } catch (error) {
        //         console.error('❌ Error en SearchFunctionality:', error);
        //     }

        //     try {
        //         new ResponsiveMenu();
        //         console.log('✅ Menú responsive inicializado');
        //     } catch (error) {
        //         console.error('❌ Error en ResponsiveMenu:', error);
        //     }

        //     try {
        //         initBackToTop();
        //         console.log('✅ Botón volver arriba inicializado');
        //     } catch (error) {
        //         console.error('❌ Error en initBackToTop:', error);
        //     }

        //     // Mostrar notificación de que todo está listo
        //     setTimeout(() => {
        //         showNotification('¡Todas las funcionalidades están activas! 🎉', 'success');
        //     }, 1000);

        //     // Ejecutar funciones adicionales
        //     setTimeout(() => {
        //         animateCardsOnLoad();
        //         makeCardsInteractive();
        //     }, 2000);
        // });

        // // Función para mostrar información de integración
        // function showIntegrationInfo() {
        //     showNotification('Sistema API disponible para integración con gestores de documentos existentes', 'success');
            
        //     // Simular apertura de modal o información adicional
        //     setTimeout(() => {
        //         const integrationInfo = `
        //             <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); max-width: 500px; margin: 20px auto;">
        //                 <h3 style="color: #003579; margin-bottom: 15px;">Capacidades de Integración API</h3>
        //                 <ul style="color: #666; line-height: 1.6;">
        //                     <li>✅ Integración con sistemas de gestión documental</li>
        //                     <li>✅ APIs RESTful para desarrollo personalizado</li>
        //                     <li>✅ Webhooks para notificaciones en tiempo real</li>
        //                     <li>✅ SDKs para múltiples lenguajes de programación</li>
        //                     <li>✅ Documentación técnica completa</li>
        //                 </ul>
        //                 <button onclick="this.parentElement.remove()" style="background: #003579; color: white; border: none; padding: 10px 20px; border-radius: 5px; margin-top: 15px; cursor: pointer;">Cerrar</button>
        //             </div>
        //         `;
                
        //         const overlay = document.createElement('div');
        //         overlay.style.cssText = `
        //             position: fixed;
        //             top: 0;
        //             left: 0;
        //             width: 100%;
        //             height: 100%;
        //             background: rgba(0,0,0,0.5);
        //             display: flex;
        //             align-items: center;
        //             justify-content: center;
        //             z-index: 10000;
        //         `;
        //         overlay.innerHTML = integrationInfo;
        //         document.body.appendChild(overlay);
                
        //         overlay.addEventListener('click', (e) => {
        //             if (e.target === overlay) {
        //                 document.body.removeChild(overlay);
        //             }
        //         });
        //     }, 1000);
        // }

        // // Función para volver arriba
        // function scrollToTop() {
        //     window.scrollTo({
        //         top: 0,
        //         behavior: 'smooth'
        //     });
        // }

        // // Inicializar botón de volver arriba
        // function initBackToTop() {
        //     const backToTopBtn = document.getElementById('backToTop');
            
        //     if (backToTopBtn) {
        //         // Mostrar/ocultar botón según el scroll
        //         window.addEventListener('scroll', () => {
        //             if (window.pageYOffset > 300) {
        //                 backToTopBtn.style.display = 'flex';
        //             } else {
        //                 backToTopBtn.style.display = 'none';
        //             }
        //         });
        //     }
        // }

        //     // Agregar estilos CSS dinámicos
        //     const style = document.createElement('style');
        //     style.textContent = `
        //         @keyframes fadeIn {
        //             from { opacity: 0; transform: translateY(20px); }
        //             to { opacity: 1; transform: translateY(0); }
        //         }

        //         @keyframes pulse {
        //             0% { transform: scale(1); }
        //             50% { transform: scale(1.05); }
        //             100% { transform: scale(1); }
        //         }

        //         @keyframes shake {
        //             0%, 100% { transform: translateX(0); }
        //             25% { transform: translateX(-5px); }
        //             75% { transform: translateX(5px); }
        //         }

        //         .animate-in {
        //             animation: fadeIn 0.6s ease-out;
        //         }

        //         .section-7 .div-2_div1 .Logo {
        //             transition: all 0.3s ease;
        //         }

        //         .section-5 .Cards {
        //             transition: all 0.3s ease;
        //             cursor: pointer;
        //         }

        //         .card {
        //             cursor: pointer;
        //         }

        //         .buscador {
        //             transition: all 0.3s ease;
        //         }

        //         .cuarta-seccion-header {
        //             transition: all 0.3s ease;
        //         }

        //         @media (max-width: 768px) {
        //             .cuarta-seccion-header.menu-active {
        //                 display: flex !important;
        //                 flex-direction: column;
        //                 position: absolute;
        //                 top: 100%;
        //                 left: 0;
        //                 right: 0;
        //                 background: white;
        //                 box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        //                 z-index: 1000;
        //             }
        //         }

        //         /* Botón de volver arriba */
        //         .back-to-top {
        //             position: fixed;
        //             bottom: 30px;
        //             right: 30px;
        //             width: 50px;
        //             height: 50px;
        //             border-radius: 50%;
        //             background: linear-gradient(135deg, #003579 0%, #0044aa 100%);
        //             color: white;
        //             border: none;
        //             cursor: pointer;
        //             display: none;
        //             align-items: center;
        //             justify-content: center;
        //             box-shadow: 0 4px 15px rgba(0, 53, 121, 0.3);
        //             transition: all 0.3s ease;
        //             z-index: 1000;
        //         }

        //         .back-to-top:hover {
        //             transform: translateY(-3px);
        //             box-shadow: 0 6px 20px rgba(0, 53, 121, 0.4);
        //             background: linear-gradient(135deg, #0044aa 0%, #0055cc 100%);
        //         }

        //         .back-to-top svg {
        //             width: 20px;
        //             height: 20px;
        //         }
        //     `;
        // //     document.head.appendChild(style);
        // // });

        // // Función para mostrar notificaciones
        // function showNotification(message, type = 'info') {
        //     const notification = document.createElement('div');
        //     notification.className = `notification notification-${type}`;
        //     notification.textContent = message;
        //     notification.style.cssText = `
        //         position: fixed;
        //         top: 20px;
        //         right: 20px;
        //         padding: 15px 20px;
        //         border-radius: 8px;
        //         color: white;
        //         font-weight: 500;
        //         z-index: 10000;
        //         animation: slideIn 0.3s ease;
        //         background: ${type === 'success' ? '#4CAF50' : type === 'error' ? '#f44336' : '#2196F3'};
        //     `;

        //     document.body.appendChild(notification);

        //     setTimeout(() => {
        //         notification.style.animation = 'slideOut 0.3s ease';
        //         setTimeout(() => {
        //             document.body.removeChild(notification);
        //         }, 300);
        //     }, 3000);
        // }

        // // Agregar estilos para las notificaciones
        // const notificationStyle = document.createElement('style');
        // notificationStyle.textContent = `
        //     @keyframes slideIn {
        //         from { transform: translateX(100%); opacity: 0; }
        //         to { transform: translateX(0); opacity: 1; }
        //     }

        //     @keyframes slideOut {
        //         from { transform: translateX(0); opacity: 1; }
        //         to { transform: translateX(100%); opacity: 0; }
        //     }
        // `;
        // document.head.appendChild(notificationStyle);
