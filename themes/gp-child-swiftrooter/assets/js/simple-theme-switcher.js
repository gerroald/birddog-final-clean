/**
 * Simple Theme Switcher
 * Working theme switcher for 5 color schemes with light/dark mode
 */

class SimpleThemeSwitcher {
  constructor() {
    this.themes = [
      'pro-core',
      'modern-teal', 
      'industrial-yellow',
      'executive-dark',
      'clean-contrast'
    ];
    
    this.modes = ['light', 'dark'];
    this.currentTheme = this.getStoredTheme() || 'pro-core';
    this.currentMode = this.getStoredMode() || 'light';
    
    this.init();
  }

  init() {
    // Apply stored theme on load
    this.applyTheme(this.currentTheme, this.currentMode);
    
    // Listen for system theme changes
    if (window.matchMedia) {
      const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
      mediaQuery.addEventListener('change', (e) => {
        if (!this.hasStoredMode()) {
          this.setMode(e.matches ? 'dark' : 'light');
        }
      });
    }
  }

  /**
   * Set the active theme
   */
  setTheme(themeName, mode = null) {
    if (!this.themes.includes(themeName)) {
      console.warn(`Theme "${themeName}" not found. Available themes:`, this.themes);
      return false;
    }

    const targetMode = mode || this.currentMode;
    this.applyTheme(themeName, targetMode);
    this.storeTheme(themeName);
    this.currentTheme = themeName;
    
    // Dispatch custom event
    this.dispatchThemeChange(themeName, targetMode);
    return true;
  }

  /**
   * Set the color mode (light/dark)
   */
  setMode(mode) {
    if (!this.modes.includes(mode)) {
      console.warn(`Mode "${mode}" not found. Available modes:`, this.modes);
      return false;
    }

    this.applyTheme(this.currentTheme, mode);
    this.storeMode(mode);
    this.currentMode = mode;
    
    // Dispatch custom event
    this.dispatchThemeChange(this.currentTheme, mode);
    return true;
  }

  /**
   * Toggle between light and dark mode
   */
  toggleMode() {
    const newMode = this.currentMode === 'light' ? 'dark' : 'light';
    return this.setMode(newMode);
  }

  /**
   * Get current theme name
   */
  getCurrentTheme() {
    return this.currentTheme;
  }

  /**
   * Get current mode
   */
  getCurrentMode() {
    return this.currentMode;
  }

  /**
   * Get all available themes
   */
  getAvailableThemes() {
    return [...this.themes];
  }

  /**
   * Apply theme to document
   */
  applyTheme(themeName, mode) {
    const root = document.documentElement;
    
    // Remove existing theme attributes
    this.themes.forEach(theme => {
      root.removeAttribute(`data-theme-${theme}`);
    });
    
    // Apply new theme
    root.setAttribute('data-theme', themeName);
    root.setAttribute('data-mode', mode);
    
    // Update color scheme meta tag
    this.updateColorScheme(mode);
  }

  /**
   * Update color-scheme meta tag
   */
  updateColorScheme(mode) {
    let meta = document.querySelector('meta[name="color-scheme"]');
    if (!meta) {
      meta = document.createElement('meta');
      meta.name = 'color-scheme';
      document.head.appendChild(meta);
    }
    meta.content = mode;
  }

  /**
   * Store theme in localStorage
   */
  storeTheme(themeName) {
    try {
      localStorage.setItem('simple-theme-switcher-theme', themeName);
    } catch (e) {
      console.warn('Could not store theme preference:', e);
    }
  }

  /**
   * Store mode in localStorage
   */
  storeMode(mode) {
    try {
      localStorage.setItem('simple-theme-switcher-mode', mode);
    } catch (e) {
      console.warn('Could not store mode preference:', e);
    }
  }

  /**
   * Get stored theme from localStorage
   */
  getStoredTheme() {
    try {
      return localStorage.getItem('simple-theme-switcher-theme');
    } catch (e) {
      return null;
    }
  }

  /**
   * Get stored mode from localStorage
   */
  getStoredMode() {
    try {
      return localStorage.getItem('simple-theme-switcher-mode');
    } catch (e) {
      return null;
    }
  }

  /**
   * Check if user has stored a mode preference
   */
  hasStoredMode() {
    try {
      return localStorage.getItem('simple-theme-switcher-mode') !== null;
    } catch (e) {
      return false;
    }
  }

  /**
   * Dispatch theme change event
   */
  dispatchThemeChange(theme, mode) {
    const event = new CustomEvent('themechange', {
      detail: {
        theme: theme,
        mode: mode,
        timestamp: Date.now()
      }
    });
    document.dispatchEvent(event);
  }
}

// Create global instance
window.simpleThemeSwitcher = new SimpleThemeSwitcher();

// Simple API functions for easy use
window.setTheme = (theme, mode) => window.simpleThemeSwitcher.setTheme(theme, mode);
window.setMode = (mode) => window.simpleThemeSwitcher.setMode(mode);
window.toggleMode = () => window.simpleThemeSwitcher.toggleMode();
window.getCurrentTheme = () => window.simpleThemeSwitcher.getCurrentTheme();
window.getCurrentMode = () => window.simpleThemeSwitcher.getCurrentMode();

// Theme change event listener
document.addEventListener('themechange', (e) => {
  console.log('Theme changed:', e.detail);
});

// Auto-initialize theme switcher UI if present
document.addEventListener('DOMContentLoaded', () => {
  const themeSelect = document.querySelector('[data-theme-select]');
  const modeToggle = document.querySelector('[data-mode-toggle]');
  const randomTheme = document.querySelector('[data-random-theme]');
  
  if (themeSelect) {
    // Populate theme select options
    const themes = window.simpleThemeSwitcher.getAvailableThemes();
    themes.forEach(theme => {
      const option = document.createElement('option');
      option.value = theme;
      option.textContent = theme.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
      if (theme === window.simpleThemeSwitcher.getCurrentTheme()) {
        option.selected = true;
      }
      themeSelect.appendChild(option);
    });
    
    // Handle theme selection
    themeSelect.addEventListener('change', (e) => {
      window.simpleThemeSwitcher.setTheme(e.target.value);
    });
  }
  
  if (modeToggle) {
    // Set initial toggle state
    modeToggle.checked = window.simpleThemeSwitcher.getCurrentMode() === 'dark';
    
    // Handle mode toggle
    modeToggle.addEventListener('change', (e) => {
      window.simpleThemeSwitcher.setMode(e.target.checked ? 'dark' : 'light');
    });
  }
  
  if (randomTheme) {
    // Handle random theme button
    randomTheme.addEventListener('click', () => {
      const themes = window.simpleThemeSwitcher.getAvailableThemes();
      const randomThemeName = themes[Math.floor(Math.random() * themes.length)];
      window.simpleThemeSwitcher.setTheme(randomThemeName);
      
      // Update select if present
      if (themeSelect) {
        themeSelect.value = randomThemeName;
      }
    });
  }
});