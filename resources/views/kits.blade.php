<div style="background-color: #ffffff; color: #111827; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; padding: 2.5rem 1rem;">

    <main style="max-width: 72rem; margin: 0 auto; display: flex; flex-direction: column; gap: 3rem;">

        <!-- Hero Banner Section -->
        <section style="background: linear-gradient(135deg, #3b0764 0%, #581c87 50%, #1e1b4b 100%); border-radius: 2rem; padding: 3.5rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 20px 40px rgba(88,28,135,0.15); text-align: center; position: relative; overflow: hidden;">
            <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(251, 191, 36, 0.15); border-radius: 50%; filter: blur(40px);"></div>
            
            <span style="background-color: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; text-transform: uppercase; letter-spacing: 0.15em; padding: 0.4rem 1.25rem; border-radius: 9999px; display: inline-block; margin-bottom: 1rem; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                Official Merchandise • Order via WhatsApp
            </span>
            
            <h1 style="font-size: 2.75rem; font-weight: 900; color: #ffffff; letter-spacing: -0.025em; margin: 0 0 1rem 0; line-height: 1.2;">
                Embogo FC <span style="color: #fbbf24;">Kit Shop &amp; Booking</span>
            </h1>
            
            <p style="color: #f3e8ff; font-size: 1.05rem; max-width: 44rem; margin: 0 auto; line-height: 1.6;">
                Get your official Buffaloes jerseys, training wear, and fan merchandise. Select your size, enter your name, and send your order straight to our WhatsApp line!
            </p>
        </section>

        <!-- Kit Products Grid -->
        <section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
            
            <!-- Item 1: Home Kit -->
            <div style="background: #fdfcff; border-radius: 1.75rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; gap: 1.5rem;">
                <div>
                    <div style="height: 180px; background: linear-gradient(135deg, #3b0764, #581c87); border-radius: 1.25rem; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; margin-bottom: 1.5rem; border: 1px solid rgba(251, 191, 36, 0.2);">
                        <span style="position: absolute; top: 1rem; right: 1rem; background: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; padding: 0.25rem 0.75rem; border-radius: 9999px;">Home Jersey</span>
                        <svg style="width: 64px; height: 64px; fill: #fbbf24;" viewBox="0 0 24 24"><path d="M16 2H8C6.9 2 6 2.9 6 4v2c0 1.1.9 2 2 2h1v12c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2V8h1c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18h-4V8h4v12zm-6-12V4h4v4h-4z"/></svg>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.5rem;">
                        <h2 style="font-size: 1.25rem; font-weight: 900; color: #581c87; margin: 0;">Official Home Kit 2026</h2>
                        <span style="font-size: 1.1rem; font-weight: 900; color: #b45309;">UGX 45,000</span>
                    </div>
                    <p style="font-size: 0.85rem; color: #6b7280; line-height: 1.4; margin: 0 0 1.25rem 0;">
                        Traditional purple and gold home strip with breathable fabric design for true Buffaloes supporters.
                    </p>
                </div>

                <!-- Order Form for Item 1 -->
                <form onsubmit="sendWhatsAppOrder(event, 'Official Home Kit 2026', '45,000', 'name-home', 'size-home')" style="display: flex; flex-direction: column; gap: 1rem; background: #f3e8ff; padding: 1.25rem; border-radius: 1rem;">
                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Your Name</label>
                        <input type="text" id="name-home" placeholder="e.g. Rwomushana Macarthy" required style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Select Size</label>
                        <select id="size-home" style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                            <option value="Very Small">Very Small</option>
                            <option value="Small">Small</option>
                            <option value="Big">Big</option>
                            <option value="Very Big">Very Big</option>
                        </select>
                    </div>

                    <button type="submit" style="background: #25d366; color: #ffffff; font-weight: 900; padding: 0.8rem; border-radius: 0.6rem; border: none; cursor: pointer; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; display: flex; align-items: center; justify-content: center; gap: 0.4rem; box-shadow: 0 4px 10px rgba(37,211,102,0.25);">
                        <svg style="width: 16px; height: 16px; fill: #ffffff;" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.198-.198.347-.764.966-.937 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Book via WhatsApp
                    </button>
                </form>
            </div>

            <!-- Item 2: Away Kit -->
            <div style="background: #fdfcff; border-radius: 1.75rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; gap: 1.5rem;">
                <div>
                    <div style="height: 180px; background: linear-gradient(135deg, #1e1b4b, #3b0764); border-radius: 1.25rem; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; margin-bottom: 1.5rem; border: 1px solid rgba(251, 191, 36, 0.2);">
                        <span style="position: absolute; top: 1rem; right: 1rem; background: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; padding: 0.25rem 0.75rem; border-radius: 9999px;">Away Jersey</span>
                        <svg style="width: 64px; height: 64px; fill: #fbbf24;" viewBox="0 0 24 24"><path d="M16 2H8C6.9 2 6 2.9 6 4v2c0 1.1.9 2 2 2h1v12c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2V8h1c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18h-4V8h4v12zm-6-12V4h4v4h-4z"/></svg>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.5rem;">
                        <h2 style="font-size: 1.25rem; font-weight: 900; color: #581c87; margin: 0;">Official Away Kit 2026</h2>
                        <span style="font-size: 1.1rem; font-weight: 900; color: #b45309;">UGX 45,000</span>
                    </div>
                    <p style="font-size: 0.85rem; color: #6b7280; line-height: 1.4; margin: 0 0 1.25rem 0;">
                        Sleek alternate away strip designed for maximum style on matchdays across the KATRICO League.
                    </p>
                </div>

                <!-- Order Form for Item 2 -->
                <form onsubmit="sendWhatsAppOrder(event, 'Official Away Kit 2026', '45,000', 'name-away', 'size-away')" style="display: flex; flex-direction: column; gap: 1rem; background: #f3e8ff; padding: 1.25rem; border-radius: 1rem;">
                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Your Name</label>
                        <input type="text" id="name-away" placeholder="e.g. Rwomushana Macarthy" required style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Select Size</label>
                        <select id="size-away" style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                            <option value="Very Small">Very Small</option>
                            <option value="Small">Small</option>
                            <option value="Big">Big</option>
                            <option value="Very Big">Very Big</option>
                        </select>
                    </div>

                    <button type="submit" style="background: #25d366; color: #ffffff; font-weight: 900; padding: 0.8rem; border-radius: 0.6rem; border: none; cursor: pointer; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; display: flex; align-items: center; justify-content: center; gap: 0.4rem; box-shadow: 0 4px 10px rgba(37,211,102,0.25);">
                        <svg style="width: 16px; height: 16px; fill: #ffffff;" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.198-.198.347-.764.966-.937 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Book via WhatsApp
                    </button>
                </form>
            </div>

            <!-- Item 3: Training Tracksuit -->
            <div style="background: #fdfcff; border-radius: 1.75rem; padding: 2rem; border: 1px solid rgba(88, 28, 135, 0.15); box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; gap: 1.5rem;">
                <div>
                    <div style="height: 180px; background: linear-gradient(135deg, #581c87, #3b0764); border-radius: 1.25rem; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; margin-bottom: 1.5rem; border: 1px solid rgba(251, 191, 36, 0.2);">
                        <span style="position: absolute; top: 1rem; right: 1rem; background: #fbbf24; color: #030712; font-size: 0.7rem; font-weight: 900; padding: 0.25rem 0.75rem; border-radius: 9999px;">Training Wear</span>
                        <svg style="width: 64px; height: 64px; fill: #fbbf24;" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v3c0 .55.45 1 1 1h1v8c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h1c.55 0 1-.45 1-1V8c0-1.1-.9-2-2-2zm-8-2h4v2h-4V4zm6 16H6v-8h12v8z"/></svg>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.5rem;">
                        <h2 style="font-size: 1.25rem; font-weight: 900; color: #581c87; margin: 0;">Embogo Training Tracksuit</h2>
                        <span style="font-size: 1.1rem; font-weight: 900; color: #b45309;">UGX 75,000</span>
                    </div>
                    <p style="font-size: 0.85rem; color: #6b7280; line-height: 1.4; margin: 0 0 1.25rem 0;">
                        High-quality warm-up tracksuit matching club colors. Perfect for training sessions or casual wear.
                    </p>
                </div>

                <!-- Order Form for Item 3 -->
                <form onsubmit="sendWhatsAppOrder(event, 'Embogo Training Tracksuit', '75,000', 'name-tracksuit', 'size-tracksuit')" style="display: flex; flex-direction: column; gap: 1rem; background: #f3e8ff; padding: 1.25rem; border-radius: 1rem;">
                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Your Name</label>
                        <input type="text" id="name-tracksuit" placeholder="e.g. Rwomushana Macarthy" required style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 0.3rem;">
                        <label style="font-size: 0.75rem; font-weight: 800; color: #374151; text-transform: uppercase;">Select Size</label>
                        <select id="size-tracksuit" style="padding: 0.65rem 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(88, 28, 135, 0.2); font-size: 0.9rem; outline: none; background: #ffffff;">
                            <option value="Very Small">Very Small</option>
                            <option value="Small">Small</option>
                            <option value="Big">Big</option>
                            <option value="Very Big">Very Big</option>
                        </select>
                    </div>

                    <button type="submit" style="background: #25d366; color: #ffffff; font-weight: 900; padding: 0.8rem; border-radius: 0.6rem; border: none; cursor: pointer; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; display: flex; align-items: center; justify-content: center; gap: 0.4rem; box-shadow: 0 4px 10px rgba(37,211,102,0.25);">
                        <svg style="width: 16px; height: 16px; fill: #ffffff;" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.198-.198.347-.764.966-.937 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Book via WhatsApp
                    </button>
                </form>
            </div>

        </section>

        <!-- Script for WhatsApp redirection -->
        <script>
            function sendWhatsAppOrder(event, itemName, itemPrice, nameInputId, sizeSelectId) {
                event.preventDefault();
                const customerName = document.getElementById(nameInputId).value.trim();
                const customerSize = document.getElementById(sizeSelectId).value;
                const phoneNum = "256761448094";

                const message = `Hello Embogo FC Shop, I would like to place an order/booking:%0A%0A*Item:* ${itemName}%0A*Price:* UGX ${itemPrice}%0A*Name:* ${customerName}%0A*Size:* ${customerSize}%0A%0APlease confirm availability and delivery details.`;
                
                const whatsappURL = `https://wa.me/${phoneNum}?text=${message}`;
                window.open(whatsappURL, '_blank');
            }
        </script>

        <!-- Core Philosophy Banner -->
        <section style="background: linear-gradient(135deg, #3b0764, #581c87); border-radius: 1.75rem; padding: 2.5rem 2rem; border: 1px solid rgba(251, 191, 36, 0.3); box-shadow: 0 15px 35px rgba(88,28,135,0.15); text-align: center; color: #ffffff;">
            <span style="color: #fbbf24; font-weight: 900; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.15em;">Core Club Mantra</span>
            <h3 style="font-size: 1.75rem; font-weight: 900; margin: 0.5rem 0; letter-spacing: -0.025em;">"Omukago nigwo mutima"</h3>
            <p style="color: #f3e8ff; font-size: 0.9rem; max-width: 34rem; margin: 0 auto; line-height: 1.5;">
                Wear the badge with pride. Support Embogo FC in Kabale by booking your official kits directly through our WhatsApp line (+256 761 448094).
            </p>
        </section>

    </main>

</div>