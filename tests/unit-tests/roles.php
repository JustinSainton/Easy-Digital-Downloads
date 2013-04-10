<?php
/**
 * Test Roles
 */

class Test_Easy_Digital_Downloads_Roles extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();
	}

	public function test_roles() {
		global $wp_roles;

		$this->assertArrayHasKey('shop_manager', (array) $wp_roles->role_names);
		$this->assertArrayHasKey('shop_accountant', (array) $wp_roles->role_names);
		$this->assertArrayHasKey('shop_worker', (array) $wp_roles->role_names);
		$this->assertArrayHasKey('shop_vendor', (array) $wp_roles->role_names);
	}

	public function test_shop_manager_caps() {
		global $wp_roles;
		$this->assertArrayHasKey( 'read', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'unfiltered_html', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'upload_files', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'export', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'import', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_others_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_others_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_private_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_private_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_published_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'delete_published_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_others_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_others_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_private_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_private_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_published_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'edit_published_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'manage_categories', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'manage_links', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'moderate_comments', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'publish_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'publish_posts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'read_private_pages', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'view_shop_reports', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'view_shop_sensitive_data', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'export_shop_reports', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'manage_shop_settings', (array) $wp_roles->role_objects['shop_manager']->capabilities );
		$this->assertArrayHasKey( 'manage_shop_discounts', (array) $wp_roles->role_objects['shop_manager']->capabilities );
	}

	public function test_administrator_caps() {
		$this->assertArrayHasKey( 'view_shop_reports', (array) $wp_roles->role_objects['administrator']->capabilities );
		$this->assertArrayHasKey( 'view_shop_sensitive_data', (array) $wp_roles->role_objects['administrator']->capabilities );
		$this->assertArrayHasKey( 'export_shop_reports', (array) $wp_roles->role_objects['administrator']->capabilities );
		$this->assertArrayHasKey( 'manage_shop_settings', (array) $wp_roles->role_objects['administrator']->capabilities );
		$this->assertArrayHasKey( 'manage_shop_discounts', (array) $wp_roles->role_objects['administrator']->capabilities );
	}

	public function test_shop_accountant_caps() {
		global $wp_roles;
		$this->assertArrayHasKey( 'read', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'edit_posts', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'delete_posts', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'edit_products', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'read_private_products', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'view_shop_reports', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'export_shop_reports', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
		$this->assertArrayHasKey( 'edit_shop_payments', (array) $wp_roles->role_objects['shop_accountant']->capabilities );
	}

	public function test_shop_vendor_caps() {
		global $wp_roles;
		$this->assertArrayHasKey( 'edit_product', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'edit_products', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'delete_product', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'delete_products', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'publish_products', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'edit_published_products', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'upload_files', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
		$this->assertArrayHasKey( 'assign_product_terms', (array) $wp_roles->role_objects['shop_vendor']->capabilities );
	}
}